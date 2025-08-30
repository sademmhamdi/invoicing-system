<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Chatbot Controller
 * Simple suggestion-based chatbot for invoicing system
 */
class Chatbot extends CI_Controller {

    // Predefined FAQ data with suggestions
    private $suggestions = [
        'en' => [
            [
                'id' => 'pricing',
                'title' => '💰 Pricing Plans',
                'description' => 'View our flexible pricing options'
            ],
            [
                'id' => 'features',
                'title' => '✨ Key Features',
                'description' => 'Discover what makes us unique'
            ],
            [
                'id' => 'getting_started',
                'title' => '🚀 Getting Started',
                'description' => 'How to start using our platform'
            ],
            [
                'id' => 'vat_compliance',
                'title' => '📋 VAT & Compliance',
                'description' => 'UAE tax compliance information'
            ],
            [
                'id' => 'payment_gateways',
                'title' => '💳 Payment Methods',
                'description' => 'Supported payment gateways'
            ],
            [
                'id' => 'support',
                'title' => '🎧 Support & Contact',
                'description' => 'Get help from our team'
            ]
        ],
        'ar' => [
            [
                'id' => 'pricing',
                'title' => '💰 خطط التسعير',
                'description' => 'اطلع على خيارات التسعير المرنة'
            ],
            [
                'id' => 'features',
                'title' => '✨ المميزات الرئيسية',
                'description' => 'اكتشف ما يميزنا عن الآخرين'
            ],
            [
                'id' => 'getting_started',
                'title' => '🚀 البدء',
                'description' => 'كيفية البدء في استخدام منصتنا'
            ],
            [
                'id' => 'vat_compliance',
                'title' => '📋 ضريبة القيمة المضافة والامتثال',
                'description' => 'معلومات الامتثال الضريبي في الإمارات'
            ],
            [
                'id' => 'payment_gateways',
                'title' => '💳 طرق الدفع',
                'description' => 'بوابات الدفع المدعومة'
            ],
            [
                'id' => 'support',
                'title' => '🎧 الدعم والتواصل',
                'description' => 'احصل على المساعدة من فريقنا'
            ]
        ]
    ];

    // Detailed responses for each topic
    private $responses = [
        'en' => [
            'pricing' => [
                'title' => '💰 Our Pricing Plans',
                'content' => "We offer 3 flexible plans to suit every business size:\n\n**Basic Plan - AED 99/month**\n• Perfect for startups\n• Up to 50 invoices monthly\n• Bilingual invoicing\n• Email support\n• Basic reports\n\n**Professional Plan - AED 199/month** ⭐ Most Popular\n• Unlimited invoices\n• Multiple payment gateways\n• Advanced reports\n• Phone support\n• Recurring invoices\n\n**Enterprise Plan - AED 399/month**\n• All Professional features\n• ERP integration\n• Dedicated account manager\n• Free team training\n• 24/7 premium support\n\n🎉 **Start with a free trial!**",
                'cta' => 'Start Free Trial',
                'cta_link' => '#pricing'
            ],
            'features' => [
                'title' => '✨ Key Features of Amaziverse',
                'content' => "**🌐 Bilingual Invoicing**\nCreate professional invoices in both Arabic and English\n\n**📊 VAT Compliance**\nAutomatic 5% UAE VAT calculation with compliant reporting\n\n**🔄 Recurring Invoices**\nSet up automatic billing for subscriptions and services\n\n**💳 Payment Integration**\nSeamless integration with PayTabs, PayPal, and Stripe UAE\n\n**📈 Financial Reports**\nComprehensive reports for better business decisions\n\n**👥 Client Management**\nComplete customer database with payment tracking\n\n**🔔 Auto Reminders**\nAutomated payment reminders to improve cash flow",
                'cta' => 'See All Features',
                'cta_link' => '#features'
            ],
            'getting_started' => [
                'title' => '🚀 Getting Started is Easy!',
                'content' => "**Step 1: Sign Up & Setup** ⏱️ 2 minutes\nCreate your account and add your company details\n\n**Step 2: Create Your First Invoice** 📝\nUse our professional templates - fully UAE compliant\n\n**Step 3: Send & Get Paid** 💸\nEmail invoices and receive payments through integrated gateways\n\n**🎯 That's it!** You're ready to manage your invoicing like a pro.\n\n**Need help?** Our Arabic-speaking support team is available 24/7.",
                'cta' => 'Start Now',
                'cta_link' => '#pricing'
            ],
            'vat_compliance' => [
                'title' => '📋 UAE VAT & Tax Compliance',
                'content' => "**🇦🇪 Fully UAE Compliant**\nOur system meets all Federal Tax Authority (FTA) and EmaraTax requirements\n\n**📊 5% VAT Automation**\n• Automatic VAT calculation\n• Compliant invoice formatting\n• All mandatory fields included\n• Tax Registration Number support\n\n**📈 VAT Reports**\n• Detailed VAT summaries\n• Ready for tax return filing\n• Export capabilities\n\n**🔮 Future Ready**\nPrepared for UAE's mandatory e-invoicing requirements in 2026\n\n**✅ Stay Compliant**\nNever worry about tax compliance again!",
                'cta' => 'Learn More',
                'cta_link' => '#features'
            ],
            'payment_gateways' => [
                'title' => '💳 Payment Methods & Gateways',
                'content' => "**🌟 Local UAE Payment Solutions**\n• PayTabs - Popular local gateway\n• Network International\n• ADCB Payment Gateway\n\n**🌍 Global Payment Options**\n• PayPal - Worldwide acceptance\n• Stripe UAE - Modern payment processing\n• Credit/Debit cards\n• Bank transfers\n\n**🔒 Secure & Fast**\n• PCI DSS compliant\n• Instant payment notifications\n• Automatic payment matching\n• Multiple currency support\n\n**📱 Easy Integration**\nAll gateways integrate seamlessly with your invoices!",
                'cta' => 'View Pricing',
                'cta_link' => '#pricing'
            ],
            'support' => [
                'title' => '🎧 Support & Contact Information',
                'content' => "**📞 Get Help When You Need It**\n\n**🕐 24/7 Arabic Support**\nOur expert team speaks Arabic and English\n\n**📧 Contact Information:**\n• Email: support@amaziverse.io\n• Phone: +971-4-123-4567\n• Location: Dubai, UAE\n\n**💬 Multiple Support Channels:**\n• Email support (All plans)\n• Phone support (Professional & Enterprise)\n• Dedicated account manager (Enterprise)\n• Free team training (Enterprise)\n\n**🚀 Quick Response Times**\nWe're here to help your business succeed!",
                'cta' => 'Contact Us',
                'cta_link' => '#contact'
            ]
        ],
        'ar' => [
            'pricing' => [
                'title' => '💰 خطط التسعير لدينا',
                'content' => "نوفر 3 خطط مرنة تناسب جميع أحجام الشركات:\n\n**الخطة الأساسية - 99 درهم/الشهر**\n• مثالية للشركات الناشئة\n• حتى 50 فاتورة شهرياً\n• فوترة ثنائية اللغة\n• دعم عبر البريد الإلكتروني\n• تقارير أساسية\n\n**الخطة الاحترافية - 199 درهم/الشهر** ⭐ الأكثر شعبية\n• فواتير غير محدودة\n• بوابات دفع متعددة\n• تقارير متقدمة\n• دعم هاتفي\n• فواتير متكررة\n\n**خطة المؤسسات - 399 درهم/الشهر**\n• جميع مميزات الخطة الاحترافية\n• تكامل مع أنظمة ERP\n• مدير حساب مخصص\n• تدريب مجاني للفريق\n• دعم على مدار الساعة\n\n🎉 **ابدأ بتجربة مجانية!**",
                'cta' => 'ابدأ التجربة المجانية',
                'cta_link' => '#pricing'
            ],
            'features' => [
                'title' => '✨ المميزات الرئيسية لأمازيفيرس',
                'content' => "**🌐 فوترة ثنائية اللغة**\nإنشاء فواتير احترافية بالعربية والإنجليزية\n\n**📊 متوافق مع ضريبة القيمة المضافة**\nحساب تلقائي لضريبة القيمة المضافة 5% مع تقارير متوافقة\n\n**🔄 فواتير متكررة**\nإعداد فوترة تلقائية للاشتراكات والخدمات\n\n**💳 تكامل مع المدفوعات**\nتكامل سلس مع PayTabs و PayPal و Stripe الإمارات\n\n**📈 التقارير المالية**\nتقارير شاملة لاتخاذ قرارات أفضل\n\n**👥 إدارة العملاء**\nقاعدة بيانات كاملة مع تتبع المدفوعات\n\n**🔔 تذكيرات تلقائية**\nتذكيرات دفع آلية لتحسين التدفق النقدي",
                'cta' => 'اطلع على جميع المميزات',
                'cta_link' => '#features'
            ],
            'getting_started' => [
                'title' => '🚀 البدء سهل جداً!',
                'content' => "**الخطوة 1: التسجيل والإعداد** ⏱️ دقيقتان\nأنشئ حسابك وأضف بيانات شركتك\n\n**الخطوة 2: إنشاء فاتورتك الأولى** 📝\nاستخدم قوالبنا الاحترافية المتوافقة مع الإمارات\n\n**الخطوة 3: الإرسال والتحصيل** 💸\nأرسل الفواتير عبر البريد واستلم المدفوعات عبر البوابات المتكاملة\n\n**🎯 هذا كل شيء!** أصبحت جاهزاً لإدارة فوترتك كالمحترفين.\n\n**تحتاج مساعدة؟** فريق الدعم الناطق بالعربية متاح 24/7.",
                'cta' => 'ابدأ الآن',
                'cta_link' => '#pricing'
            ],
            'vat_compliance' => [
                'title' => '📋 ضريبة القيمة المضافة والامتثال في الإمارات',
                'content' => "**🇦🇪 متوافق تماماً مع الإمارات**\nنظامنا يلبي جميع متطلبات الهيئة الاتحادية للضرائب وإمارة تاكس\n\n**📊 أتمتة ضريبة القيمة المضافة 5%**\n• حساب تلقائي للضريبة\n• تنسيق فواتير متوافق\n• جميع الحقول الإلزامية مُدرجة\n• دعم رقم التسجيل الضريبي\n\n**📈 تقارير ضريبة القيمة المضافة**\n• ملخصات مفصلة للضريبة\n• جاهزة لتقديم الإقرارات الضريبية\n• إمكانيات التصدير\n\n**🔮 جاهز للمستقبل**\nمُعد لمتطلبات الفوترة الإلكترونية الإلزامية في الإمارات 2026\n\n**✅ ابق متوافقاً**\nلا تقلق أبداً بشأن الامتثال الضريبي!",
                'cta' => 'تعلم المزيد',
                'cta_link' => '#features'
            ],
            'payment_gateways' => [
                'title' => '💳 طرق الدفع والبوابات',
                'content' => "**🌟 حلول الدفع المحلية في الإمارات**\n• PayTabs - البوابة المحلية الشائعة\n• Network International\n• بوابة دفع بنك أبوظبي التجاري\n\n**🌍 خيارات الدفع العالمية**\n• PayPal - قبول عالمي\n• Stripe الإمارات - معالجة مدفوعات حديثة\n• البطاقات الائتمانية/المدينة\n• التحويلات المصرفية\n\n**🔒 آمن وسريع**\n• متوافق مع PCI DSS\n• إشعارات فورية للمدفوعات\n• مطابقة تلقائية للمدفوعات\n• دعم العملات المتعددة\n\n**📱 تكامل سهل**\nجميع البوابات تتكامل بسلاسة مع فواتيرك!",
                'cta' => 'اطلع على الأسعار',
                'cta_link' => '#pricing'
            ],
            'support' => [
                'title' => '🎧 معلومات الدعم والتواصل',
                'content' => "**📞 احصل على المساعدة عند الحاجة**\n\n**🕐 دعم عربي 24/7**\nفريقنا الخبير يتحدث العربية والإنجليزية\n\n**📧 معلومات التواصل:**\n• البريد الإلكتروني: support@amaziverse.io\n• الهاتف: 4567-123-4-971+\n• الموقع: دبي، الإمارات العربية المتحدة\n\n**💬 قنوات دعم متعددة:**\n• دعم عبر البريد الإلكتروني (جميع الخطط)\n• دعم هاتفي (الاحترافية والمؤسسات)\n• مدير حساب مخصص (المؤسسات)\n• تدريب مجاني للفريق (المؤسسات)\n\n**🚀 أوقات استجابة سريعة**\nنحن هنا لمساعدة عملك على النجاح!",
                'cta' => 'اتصل بنا',
                'cta_link' => '#contact'
            ]
        ]
    ];

    public function __construct() {
        parent::__construct();
        $this->output->set_content_type('application/json');
    }

    /**
     * Handle chatbot requests - return suggestions or detailed responses
     */
    public function ask() {
        if ($this->input->method() !== 'post') {
            $this->output->set_status_header(405)->set_output(json_encode(['error' => 'Method not allowed']));
            return;
        }

        try {
            $raw_input = file_get_contents('php://input');
            $input = json_decode($raw_input, true);

            if (!$input || !isset($input['lang'])) {
                $this->output->set_status_header(400)->set_output(json_encode(['error' => 'Invalid request']));
                return;
            }

            $lang = in_array($input['lang'], ['en', 'ar']) ? $input['lang'] : 'en';
            
            // Check if requesting suggestions or specific topic
            if (isset($input['action']) && $input['action'] === 'get_suggestions') {
                $this->_send_suggestions($lang);
            } elseif (isset($input['topic_id'])) {
                $this->_send_topic_response($input['topic_id'], $lang);
            } else {
                $this->_send_suggestions($lang);
            }

        } catch (Exception $e) {
            $this->output->set_status_header(500)->set_output(json_encode(['error' => 'Server error']));
        }
    }

    /**
     * Send available suggestions
     */
    private function _send_suggestions($lang) {
        $welcome_msg = $lang === 'ar' 
            ? "مرحباً! 👋 أنا مساعد أمازيفيرس الذكي. اختر أحد المواضيع التالية للحصول على معلومات مفصلة:"
            : "Hello! 👋 I'm your Amaziverse assistant. Choose one of the topics below to get detailed information:";

        $response = [
            'type' => 'suggestions',
            'message' => $welcome_msg,
            'suggestions' => $this->suggestions[$lang]
        ];

        $this->output->set_output(json_encode($response));
    }

    /**
     * Send detailed response for specific topic
     */
    private function _send_topic_response($topic_id, $lang) {
        if (!isset($this->responses[$lang][$topic_id])) {
            $error_msg = $lang === 'ar' 
                ? "عذراً، لم أجد معلومات حول هذا الموضوع."
                : "Sorry, I couldn't find information about that topic.";
            
            $this->output->set_output(json_encode([
                'type' => 'error',
                'message' => $error_msg
            ]));
            return;
        }

        $topic_data = $this->responses[$lang][$topic_id];
        
        $back_to_menu = $lang === 'ar' 
            ? "🏠 العودة للقائمة الرئيسية"
            : "🏠 Back to Main Menu";

        $response = [
            'type' => 'detailed_response',
            'title' => $topic_data['title'],
            'content' => $topic_data['content'],
            'cta' => $topic_data['cta'],
            'cta_link' => $topic_data['cta_link'],
            'back_option' => $back_to_menu
        ];

        $this->output->set_output(json_encode($response));
    }

    /**
     * Get CSRF token (not needed for this simple version)
     */
    public function token() {
        $this->output->set_output(json_encode(['status' => 'ready']));
    }
}
