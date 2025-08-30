/**
 * Amaziverse Simple Suggestion-based Chatbot
 * No AI required - uses predefined suggestions and responses
 */
(function() {
    'use strict';

    const Chatbot = {
        // Configuration
        config: {
            baseUrl: '',
            currentLang: 'en'
        },

        // State
        state: {
            isOpen: false,
            isTyping: false,
            waitingForSuggestion: true
        },

        // UI Elements
        elements: {},

        // Internationalization
        i18n: {
            en: {
                placeholder: 'Choose a suggestion or type a message...',
                send: 'Send',
                typing: 'Typing...',
                newChat: 'New Chat',
                title: 'Amaziverse Support',
                welcome: 'Hello! I\'m here to help you with Amaziverse invoicing system. Choose a topic below to learn more!',
                error: 'Sorry, I encountered an error. Please try again.',
                langToggle: 'عربي'
            },
            ar: {
                placeholder: 'اختر اقتراحاً أو اكتب رسالة...',
                send: 'إرسال',
                typing: 'جاري الكتابة...',
                newChat: 'محادثة جديدة',
                title: 'دعم أمازيفيرس',
                welcome: 'مرحباً! أنا هنا لمساعدتك مع نظام الفوترة أمازيفيرس. اختر موضوعاً من الأسفل لتتعلم المزيد!',
                error: 'عذراً، واجهت خطأ. يرجى المحاولة مرة أخرى.',
                langToggle: 'EN'
            }
        },

        /**
         * Initialize the chatbot
         */
        init: function(options) {
            // Merge configuration
            Object.assign(this.config, options);

            // Cache DOM elements
            this.cacheElements();

            // Bind events
            this.bindEvents();

            // Set initial language
            this.setLanguage(this.config.currentLang);

            // Load initial suggestions
            this.loadSuggestions();

            console.log('Simple Chatbot initialized');
        },

        /**
         * Cache DOM elements
         */
        cacheElements: function() {
            this.elements = {
                widget: document.getElementById('chatbot-widget'),
                toggle: document.getElementById('chatbot-toggle'),
                panel: document.getElementById('chatbot-panel'),
                close: document.getElementById('chatbot-close'),
                messages: document.getElementById('chatbot-messages'),
                form: document.getElementById('chatbot-form'),
                input: document.getElementById('chatbot-input'),
                send: document.getElementById('chatbot-send'),
                typing: document.getElementById('chatbot-typing'),
                clear: document.getElementById('chatbot-clear'),
                langToggle: document.getElementById('chatbot-lang-toggle'),
                notification: document.getElementById('chatbot-notification')
            };
        },

        /**
         * Bind event listeners
         */
        bindEvents: function() {
            // Toggle chat
            this.elements.toggle.addEventListener('click', () => this.toggleChat());
            this.elements.close.addEventListener('click', () => this.closeChat());

            // Form submission
            this.elements.form.addEventListener('submit', (e) => this.handleSubmit(e));

            // Language toggle
            this.elements.langToggle.addEventListener('click', () => this.toggleLanguage());

            // Clear chat
            this.elements.clear.addEventListener('click', () => this.clearChat());

            // Auto-detect language while typing
            this.elements.input.addEventListener('input', () => this.detectLanguage());

            // Click outside to close
            document.addEventListener('click', (e) => {
                if (!this.elements.widget.contains(e.target) && this.state.isOpen) {
                    this.closeChat();
                }
            });
        },

        /**
         * Toggle chat panel
         */
        toggleChat: function() {
            if (this.state.isOpen) {
                this.closeChat();
            } else {
                this.openChat();
            }
        },

        /**
         * Open chat panel
         */
        openChat: function() {
            this.elements.panel.style.display = 'flex';
            this.state.isOpen = true;
            this.elements.input.focus();
            this.hideNotification();
            setTimeout(() => this.scrollToBottom(), 100);
        },

        /**
         * Close chat panel
         */
        closeChat: function() {
            this.elements.panel.style.display = 'none';
            this.state.isOpen = false;
        },

        /**
         * Handle form submission
         */
        handleSubmit: function(e) {
            e.preventDefault();
            
            const message = this.elements.input.value.trim();
            if (!message || this.state.isTyping) {
                return;
            }

            // Add user message
            this.addMessage('user', message);
            
            // Clear input
            this.elements.input.value = '';

            // If waiting for suggestion, reload them
            if (message.toLowerCase().includes('menu') || message.toLowerCase().includes('back') || 
                message.includes('القائمة') || message.includes('العودة')) {
                this.loadSuggestions();
            } else {
                // For now, just reload suggestions
                this.loadSuggestions();
            }
        },

        /**
         * Load initial suggestions
         */
        loadSuggestions: function() {
            this.setTyping(true);
            
            const requestData = {
                action: 'get_suggestions',
                lang: this.config.currentLang
            };

            fetch(this.config.baseUrl + 'chatbot/ask', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(requestData)
            })
            .then(response => response.json())
            .then(data => {
                this.setTyping(false);
                if (data.type === 'suggestions') {
                    this.showSuggestions(data.message, data.suggestions);
                } else if (data.error) {
                    this.showError({ error: data.error });
                }
            })
            .catch(error => {
                console.error('Chatbot error:', error);
                this.setTyping(false);
                this.showError({ error: 'Connection failed' });
            });
        },

        /**
         * Show suggestions as clickable buttons
         */
        showSuggestions: function(message, suggestions) {
            // Add bot message
            const messageEl = this.addMessage('assistant', message);
            
            // Create suggestions container
            const suggestionsContainer = document.createElement('div');
            suggestionsContainer.className = 'chatbot-suggestions';
            suggestionsContainer.style.cssText = `
                margin-top: 10px;
                display: flex;
                flex-direction: column;
                gap: 8px;
            `;

            // Add suggestion buttons
            suggestions.forEach(suggestion => {
                const btn = document.createElement('button');
                btn.className = 'chatbot-suggestion-btn';
                btn.style.cssText = `
                    background: linear-gradient(-160deg, #FFA72A, #DF8200);
                    border: 1px solid #FFA72A;
                    color: white;
                    padding: 16px;
                    border-radius: 12px;
                    text-align: left;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    font-size: 14px;
                    box-shadow: 0 2px 8px rgba(255, 167, 42, 0.2);
                `;
                
                btn.innerHTML = `
                    <div style="font-weight: 600; margin-bottom: 6px; color: white;">${suggestion.title}</div>
                    <div style="font-size: 12px; color: rgba(255, 255, 255, 0.9);">${suggestion.description}</div>
                `;

                btn.addEventListener('click', () => this.selectSuggestion(suggestion));
                
                // Hover effects
                btn.addEventListener('mouseenter', () => {
                    btn.style.transform = 'translateY(-2px)';
                    btn.style.boxShadow = '0 4px 16px rgba(255, 167, 42, 0.3)';
                });
                btn.addEventListener('mouseleave', () => {
                    btn.style.transform = 'translateY(0)';
                    btn.style.boxShadow = '0 2px 8px rgba(255, 167, 42, 0.2)';
                });

                suggestionsContainer.appendChild(btn);
            });

            // Append to message bubble
            messageEl.appendChild(suggestionsContainer);
            this.scrollToBottom();
        },

        /**
         * Handle suggestion selection
         */
        selectSuggestion: function(suggestion) {
            // Show user selected the suggestion
            this.addMessage('user', suggestion.title);
            
            // Request detailed response
            this.requestTopicDetails(suggestion.id);
        },

        /**
         * Request detailed information about a topic
         */
        requestTopicDetails: function(topicId) {
            this.setTyping(true);

            const requestData = {
                topic_id: topicId,
                lang: this.config.currentLang
            };

            fetch(this.config.baseUrl + 'chatbot/ask', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(requestData)
            })
            .then(response => response.json())
            .then(data => {
                this.setTyping(false);
                if (data.type === 'detailed_response') {
                    this.showDetailedResponse(data);
                } else if (data.error) {
                    this.showError({ error: data.error });
                }
            })
            .catch(error => {
                console.error('Chatbot error:', error);
                this.setTyping(false);
                this.showError({ error: 'Connection failed' });
            });
        },

        /**
         * Show detailed response with action buttons
         */
        showDetailedResponse: function(data) {
            // Add bot message with detailed content
            const messageEl = this.addMessage('assistant', '');
            
            // Create content structure
            const content = document.createElement('div');
            content.innerHTML = `
                <div style="font-weight: 600; color: #FFA72A; margin-bottom: 8px;">${data.title}</div>
                <div style="white-space: pre-line; line-height: 1.5; margin-bottom: 12px;">${data.content}</div>
            `;

            // Add action buttons
            const actionsContainer = document.createElement('div');
            actionsContainer.style.cssText = 'display: flex; gap: 8px; flex-wrap: wrap;';

            // CTA button
            if (data.cta && data.cta_link) {
                const ctaBtn = document.createElement('button');
                ctaBtn.className = 'chatbot-cta-btn';
                ctaBtn.style.cssText = `
                    background: linear-gradient(-160deg, #FFA72A, #DF8200);
                    color: white;
                    border: none;
                    padding: 8px 16px;
                    border-radius: 16px;
                    font-size: 12px;
                    font-weight: 600;
                    cursor: pointer;
                `;
                ctaBtn.textContent = data.cta;
                ctaBtn.addEventListener('click', () => {
                    // Scroll to the section or trigger action
                    const element = document.querySelector(data.cta_link);
                    if (element) {
                        element.scrollIntoView({ behavior: 'smooth' });
                        this.closeChat();
                    }
                });
                actionsContainer.appendChild(ctaBtn);
            }

            // Back to menu button
            const backBtn = document.createElement('button');
            backBtn.className = 'chatbot-back-btn';
            backBtn.style.cssText = `
                background: rgba(255, 167, 42, 0.1);
                border: 1px solid #FFA72A;
                color: #FFA72A;
                padding: 8px 16px;
                border-radius: 16px;
                font-size: 12px;
                cursor: pointer;
            `;
            backBtn.textContent = data.back_option;
            backBtn.addEventListener('click', () => {
                this.addMessage('user', data.back_option);
                this.loadSuggestions();
            });
            actionsContainer.appendChild(backBtn);

            content.appendChild(actionsContainer);
            messageEl.appendChild(content);
            this.scrollToBottom();
        },

        /**
         * Add message to chat
         */
        addMessage: function(role, content) {
            const messageEl = document.createElement('div');
            messageEl.className = `chatbot-message chatbot-message-${role}`;
            
            const avatar = document.createElement('div');
            avatar.className = 'chatbot-avatar';
            avatar.innerHTML = role === 'user' ? 
                '👤' :
                '🤖';
            
            const bubble = document.createElement('div');
            bubble.className = 'chatbot-bubble';
            if (content) {
                bubble.textContent = content;
            }
            
            messageEl.appendChild(avatar);
            messageEl.appendChild(bubble);
            
            this.elements.messages.appendChild(messageEl);
            this.scrollToBottom();

            return bubble;
        },

        /**
         * Set typing indicator
         */
        setTyping: function(typing) {
            this.state.isTyping = typing;
            this.elements.typing.style.display = typing ? 'block' : 'none';
            this.elements.send.disabled = typing;
            
            if (typing) {
                this.scrollToBottom();
            }
        },

        /**
         * Show error message
         */
        showError: function(errorData) {
            let errorMsg = errorData.error || this.i18n[this.config.currentLang].error;
            this.addMessage('assistant', errorMsg);
        },

        /**
         * Clear chat history
         */
        clearChat: function() {
            this.elements.messages.innerHTML = '';
            this.loadSuggestions();
        },

        /**
         * Toggle language
         */
        toggleLanguage: function() {
            const newLang = this.config.currentLang === 'en' ? 'ar' : 'en';
            this.setLanguage(newLang);
            this.clearChat(); // Reload in new language
        },

        /**
         * Set language
         */
        setLanguage: function(lang) {
            this.config.currentLang = lang;
            
            // Update UI text
            this.updateLanguageUI(lang);
            
            // Set panel direction
            this.elements.panel.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
            
            // Add/remove RTL class to widget for positioning
            if (lang === 'ar') {
                this.elements.widget.classList.add('chatbot-rtl');
            } else {
                this.elements.widget.classList.remove('chatbot-rtl');
            }
            
            // Update input placeholder
            this.elements.input.placeholder = this.i18n[lang].placeholder;
        },

        /**
         * Update language UI elements
         */
        updateLanguageUI: function(lang) {
            const elements = this.elements.panel.querySelectorAll('[class*="en"], [class*="ar"]');
            
            elements.forEach(el => {
                const isEnglish = el.className.includes('-en');
                const isArabic = el.className.includes('-ar');
                
                if (isEnglish) {
                    el.style.display = lang === 'en' ? '' : 'none';
                } else if (isArabic) {
                    el.style.display = lang === 'ar' ? '' : 'none';
                }
            });
        },

        /**
         * Auto-detect language from input
         */
        detectLanguage: function() {
            const text = this.elements.input.value;
            if (!text.trim()) return;

            // Simple Arabic detection
            const arabicRegex = /[\u0600-\u06FF]/;
            const hasArabic = arabicRegex.test(text);
            
            if (hasArabic && this.config.currentLang === 'en') {
                this.setLanguage('ar');
            } else if (!hasArabic && this.config.currentLang === 'ar' && /[a-zA-Z]/.test(text)) {
                this.setLanguage('en');
            }
        },

        /**
         * Scroll messages to bottom
         */
        scrollToBottom: function() {
            this.elements.messages.scrollTop = this.elements.messages.scrollHeight;
        },

        /**
         * Show notification badge
         */
        showNotification: function() {
            this.elements.notification.style.display = 'flex';
        },

        /**
         * Hide notification badge
         */
        hideNotification: function() {
            this.elements.notification.style.display = 'none';
        }
    };

    // Expose globally
    window.Chatbot = Chatbot;

})();
