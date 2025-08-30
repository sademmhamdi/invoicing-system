<!-- Chatbot Widget -->
<div id="chatbot-widget" class="chatbot-widget">
    <!-- Floating Chat Button -->
    <button id="chatbot-toggle" class="chatbot-toggle" aria-label="Open chat">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 2H4C2.9 2 2 2.9 2 4V16C2 17.1 2.9 18 4 18H6L10 22L14 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="chatbot-notification" id="chatbot-notification" style="display: none;">1</span>
    </button>

    <!-- Chat Panel -->
    <div id="chatbot-panel" class="chatbot-panel" style="display: none;">
        <!-- Header -->
        <div class="chatbot-header">
            <div class="chatbot-title">
                <span class="chatbot-title-en">Amaziverse Support</span>
                <span class="chatbot-title-ar" style="display: none;">دعم أمازيفيرس</span>
            </div>
            <div class="chatbot-controls">
                <!-- Language Toggle -->
                <button id="chatbot-lang-toggle" class="chatbot-lang-btn" aria-label="Switch language">
                    <span class="lang-en">عربي</span>
                    <span class="lang-ar" style="display: none;">EN</span>
                </button>
                <!-- Close Button -->
                <button id="chatbot-close" class="chatbot-close" aria-label="Close chat">&times;</button>
            </div>
        </div>

        <!-- Messages Container -->
        <div id="chatbot-messages" class="chatbot-messages">
            <div class="chatbot-message chatbot-message-bot">
                <div class="chatbot-avatar">
                    🤖
                </div>
                <div class="chatbot-bubble">
                    <span class="welcome-en">Hello! I'm here to help you with Amaziverse invoicing system. Ask me anything about our features, pricing, or how to get started!</span>
                    <span class="welcome-ar" style="display: none;">مرحباً! أنا هنا لمساعدتك مع نظام الفوترة أمازيفيرس. اسألني أي شيء عن ميزاتنا أو الأسعار أو كيفية البدء!</span>
                </div>
            </div>
        </div>

        <!-- Typing Indicator -->
        <div id="chatbot-typing" class="chatbot-typing" style="display: none;">
            <div class="chatbot-message chatbot-message-bot">
                <div class="chatbot-avatar">
                    🤖
                </div>
                <div class="chatbot-bubble">
                    <div class="typing-indicator">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Input Form -->
        <form id="chatbot-form" class="chatbot-form">
            <div class="chatbot-input-container">
                <textarea 
                    id="chatbot-input" 
                    class="chatbot-input" 
                    rows="1" 
                    placeholder="Type your message..."
                    maxlength="1000"
                    required
                ></textarea>
                <button type="submit" class="chatbot-send" id="chatbot-send" aria-label="Send message">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M22 2L11 13M22 2L15 22L11 13M22 2L2 9L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="chatbot-actions">
                <button type="button" id="chatbot-clear" class="chatbot-clear-btn">
                    <span class="clear-en">New Chat</span>
                    <span class="clear-ar" style="display: none;">محادثة جديدة</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Chatbot Styles -->
<style>
.chatbot-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    font-size: 14px;
    line-height: 1.4;
    transition: left 0.3s ease, right 0.3s ease;
}

/* RTL positioning for Arabic mode */
.chatbot-widget.chatbot-rtl {
    right: auto;
    left: 20px;
}

.chatbot-toggle {
    width: 56px;
    height: 56px;
    background: linear-gradient(-160deg, #FFA72A, #DF8200);
    border: none;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(223, 130, 0, 0.4);
    transition: all 0.3s ease;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.chatbot-toggle svg {
    width: 24px;
    height: 24px;
    stroke: white;
    fill: none;
}

.chatbot-toggle:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(223, 130, 0, 0.5);
}

.chatbot-notification {
    position: absolute;
    top: -4px;
    right: -4px;
    background: #ff4444;
    color: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    font-size: 11px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: left 0.3s ease, right 0.3s ease;
}

/* RTL positioning for notification */
.chatbot-widget.chatbot-rtl .chatbot-notification {
    right: auto;
    left: -4px;
}

.chatbot-panel {
    position: absolute;
    bottom: 70px;
    right: 0;
    width: 350px;
    height: 500px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.1);
    transition: left 0.3s ease, right 0.3s ease;
}

/* RTL positioning for panel */
.chatbot-widget.chatbot-rtl .chatbot-panel {
    right: auto;
    left: 0;
}

.chatbot-header {
    background: linear-gradient(-160deg, #FFA72A, #DF8200);
    color: white;
    padding: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-shrink: 0;
}

.chatbot-title {
    font-weight: 600;
    font-size: 16px;
}

.chatbot-controls {
    display: flex;
    gap: 8px;
    align-items: center;
}

.chatbot-lang-btn {
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 12px;
    transition: all 0.2s ease;
}

.chatbot-lang-btn:hover {
    background: rgba(255, 255, 255, 0.3);
}

.chatbot-close {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    padding: 0;
    line-height: 1;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.chatbot-messages {
    flex: 1;
    overflow-y: auto;
    padding: 16px;
    scroll-behavior: smooth;
}

.chatbot-message {
    display: flex;
    margin-bottom: 16px;
    gap: 8px;
}

.chatbot-message-user {
    flex-direction: row-reverse;
}

.chatbot-avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    flex-shrink: 0;
    border: 1px solid #e0e0e0;
    font-size: 16px;
    line-height: 1;
}

.chatbot-avatar svg {
    width: 18px;
    height: 18px;
    fill: none;
    stroke: currentColor;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    display: block;
}

.chatbot-avatar i {
    font-size: 16px !important;
    color: currentColor;
    display: block;
}

/* Ensure filled circles show properly */
.chatbot-avatar svg circle[fill="currentColor"] {
    fill: currentColor;
    stroke: none;
}

.chatbot-message-user .chatbot-avatar {
    background: linear-gradient(-160deg, #FFA72A, #DF8200);
    color: white;
    border-color: #FFA72A;
}

.chatbot-message-user .chatbot-avatar svg {
    stroke: white;
    color: white;
}

.chatbot-message-user .chatbot-avatar i {
    color: white;
}

.chatbot-bubble {
    max-width: 75%;
    padding: 12px 16px;
    border-radius: 18px;
    background: #f5f5f5;
    color: #333;
    word-wrap: break-word;
    line-height: 1.4;
}

.chatbot-message-user .chatbot-bubble {
    background: linear-gradient(-160deg, #FFA72A, #DF8200);
    color: white;
}

.typing-indicator {
    display: flex;
    gap: 4px;
    padding: 8px 0;
    align-items: center;
}

.typing-indicator span {
    width: 8px;
    height: 8px;
    background: #FFA72A;
    border-radius: 50%;
    animation: typing 1.4s ease-in-out infinite;
    opacity: 0.7;
}

.typing-indicator span:nth-child(2) {
    animation-delay: 0.2s;
}

.typing-indicator span:nth-child(3) {
    animation-delay: 0.4s;
}

.typing-indicator span:nth-child(2) {
    animation-delay: 0.2s;
}

.typing-indicator span:nth-child(3) {
    animation-delay: 0.4s;
}

@keyframes typing {
    0%, 60%, 100% {
        transform: translateY(0);
        opacity: 0.5;
    }
    30% {
        transform: translateY(-8px);
        opacity: 1;
    }
}

.chatbot-form {
    padding: 16px;
    border-top: 1px solid #eee;
    flex-shrink: 0;
}

.chatbot-input-container {
    display: flex;
    gap: 8px;
    align-items: flex-end;
}

.chatbot-input {
    flex: 1;
    border: 1px solid #ddd;
    border-radius: 20px;
    padding: 12px 16px;
    resize: none;
    outline: none;
    min-height: 20px;
    max-height: 100px;
    font-family: inherit;
    font-size: 14px;
    line-height: 1.4;
}

.chatbot-input:focus {
    border-color: #FFA72A;
    box-shadow: 0 0 0 2px rgba(255, 167, 42, 0.1);
}

.chatbot-send {
    width: 40px;
    height: 40px;
    background: linear-gradient(-160deg, #FFA72A, #DF8200);
    border: none;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    flex-shrink: 0;
}

.chatbot-send:hover:not(:disabled) {
    transform: scale(1.05);
}

.chatbot-send:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.chatbot-actions {
    margin-top: 8px;
    display: flex;
    justify-content: center;
}

.chatbot-clear-btn {
    background: none;
    border: 1px solid #ddd;
    color: #666;
    padding: 6px 12px;
    border-radius: 16px;
    cursor: pointer;
    font-size: 12px;
    transition: all 0.2s ease;
}

.chatbot-clear-btn:hover {
    border-color: #FFA72A;
    color: #FFA72A;
}

/* Suggestion buttons styling */
.chatbot-suggestions {
    margin-top: 12px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.chatbot-suggestion-btn {
    background: linear-gradient(-160deg, #FFA72A, #DF8200) !important;
    border: none !important;
    color: white !important;
    padding: 16px !important;
    border-radius: 12px !important;
    text-align: left !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    font-size: 14px !important;
    box-shadow: 0 2px 8px rgba(255, 167, 42, 0.2) !important;
}

.chatbot-suggestion-btn:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 4px 16px rgba(255, 167, 42, 0.3) !important;
}

.chatbot-suggestion-btn div {
    color: white !important;
}

/* RTL Support */
.chatbot-panel[dir="rtl"] {
    left: 0;
    right: auto;
}

.chatbot-panel[dir="rtl"] .chatbot-message {
    flex-direction: row-reverse;
}

.chatbot-panel[dir="rtl"] .chatbot-message-user {
    flex-direction: row;
}

.chatbot-panel[dir="rtl"] .chatbot-input {
    text-align: right;
    direction: rtl;
}

/* Mobile Responsiveness */
@media (max-width: 480px) {
    .chatbot-widget {
        bottom: 10px;
        right: 10px;
    }
    
    .chatbot-panel {
        width: calc(100vw - 20px);
        height: calc(100vh - 100px);
        max-width: 350px;
        max-height: 500px;
    }
}

/* Dark mode support */
@media (prefers-color-scheme: dark) {
    .chatbot-panel {
        background: #2a2a2a;
        border-color: #444;
        color: #fff;
    }
    
    .chatbot-messages {
        background: #2a2a2a;
    }
    
    .chatbot-bubble {
        background: #3a3a3a;
        color: #fff;
    }
    
    .chatbot-avatar {
        background: #444;
        color: #ccc;
    }
    
    .chatbot-input {
        background: #3a3a3a;
        border-color: #555;
        color: #fff;
    }
    
    .chatbot-input::placeholder {
        color: #999;
    }
    
    .chatbot-form {
        border-top-color: #444;
    }
}
</style>

<!-- Load Chatbot JavaScript -->
<script src="<?= base_url('assets/js/chatbot.js') ?>"></script>
<script>
// Initialize chatbot with current language
document.addEventListener('DOMContentLoaded', function() {
    const isArabic = document.documentElement.lang === 'ar' ||
                     document.documentElement.dir === 'rtl' || 
                     document.body.classList.contains('ar') ||
                     window.location.pathname.includes('/ar') ||
                     document.querySelector('html[lang="ar"]') !== null;
    
    if (window.Chatbot) {
        window.Chatbot.init({
            baseUrl: '<?= base_url() ?>',
            currentLang: isArabic ? 'ar' : 'en',
            csrfName: '<?= $this->security->get_csrf_token_name() ?>',
            csrfHash: '<?= $this->security->get_csrf_hash() ?>'
        });
    }
});
</script>
