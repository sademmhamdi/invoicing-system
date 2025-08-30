# Amaziverse Bilingual AI Chatbot

Production-ready OpenAI-powered chatbot for CodeIgniter 3 with Arabic/English support and streaming responses.

## Features

- **Bilingual Support**: Automatic language detection and RTL support for Arabic
- **Real-time Streaming**: Progressive response rendering using Server-Sent Events
- **Security**: CSRF protection, input validation, and rate limiting
- **Responsive Design**: Mobile-friendly with dark mode support
- **Language Toggle**: Switch between Arabic and English interface
- **Professional UI**: Clean chat interface with typing indicators

## Installation & Setup

### 1. Environment Configuration

Copy the example environment file:
```bash
cp .env.example .env
```

Edit `.env` with your OpenAI API key:
```
OPENAI_API_KEY=sk-your-actual-openai-api-key-here
OPENAI_MODEL=gpt-4o-mini
OPENAI_MAX_TOKENS=500
OPENAI_TEMPERATURE=0.7
CI_ENV=production
```

### 2. CodeIgniter Configuration

**Enable CSRF Protection** (already configured):
- `application/config/config.php`: `$config['csrf_protection'] = TRUE;`

**Autoload helpers** (already configured):
- `application/config/autoload.php`: `$autoload['helper'] = array('url', 'env');`

### 3. Files Added

**Controllers:**
- `application/controllers/Chatbot.php` - Main chatbot API controller

**Helpers:**
- `application/helpers/env_helper.php` - Environment variable loader

**Views:**
- `application/views/chatbot_widget.php` - Chat widget HTML/CSS

**Assets:**
- `assets/js/chatbot.js` - Frontend JavaScript

**Routes** (added to `application/config/routes.php`):
```php
$route['chatbot/ask'] = 'chatbot/ask';
$route['chatbot/token'] = 'chatbot/token';
```

## API Endpoints

### POST /chatbot/ask
Main chat endpoint that accepts streaming requests.

**Request:**
```json
{
  "messages": [
    {"role": "user", "content": "What are your pricing plans?"}
  ],
  "lang": "en",
  "csrf_test_name": "token_hash_here"
}
```

**Response:** Server-Sent Events stream
```
event: message
data: {"content": "Our pricing plans include..."}

event: complete
data: {}
```

### GET /chatbot/token
Returns CSRF token for frontend requests.

## Testing

### cURL Example
```bash
# First get CSRF token
curl -X GET "http://localhost/invoice-landing/chatbot/token"

# Then send chat message
curl -X POST "http://localhost/invoice-landing/chatbot/ask" \
  -H "Content-Type: application/json" \
  -d '{
    "messages": [{"role": "user", "content": "Tell me about your invoicing features"}],
    "lang": "en",
    "csrf_test_name": "your_token_here"
  }'
```

### Frontend Testing
Open your browser and navigate to your CodeIgniter site. The chat widget should appear as a floating button in the bottom-right corner.

## Configuration Options

### Environment Variables
- `OPENAI_API_KEY`: Your OpenAI API key
- `OPENAI_MODEL`: Model to use (default: gpt-4o-mini)
- `OPENAI_MAX_TOKENS`: Maximum response tokens (default: 500)
- `OPENAI_TEMPERATURE`: Response creativity (0-1, default: 0.7)

### System Prompt Customization
Edit the `$system_prompt` in `application/controllers/Chatbot.php` to customize the bot's behavior and add your specific FAQ content.

### Security Settings
- Input length limit: 1000 characters (configurable in controller)
- Conversation history limit: 10 messages (configurable)
- CSRF token expiration: 7200 seconds
- Request timeout: 60 seconds

## Deployment Checklist

### Production Setup
1. **Set Environment Variables**
   - Set `OPENAI_API_KEY` in your hosting environment
   - Set `CI_ENV=production`
   - Never commit `.env` file to version control

2. **HTTPS Configuration**
   - Ensure your site runs on HTTPS for security
   - Update `base_url` in `application/config/config.php`

3. **Error Logging**
   - Set `$config['log_threshold'] = 1` in `config.php` for production
   - Monitor logs in `application/logs/`

4. **Performance Optimization**
   - Enable output compression: `$config['compress_output'] = TRUE;`
   - Consider implementing request caching for repeated queries

5. **Security Headers**
   - Add Content Security Policy headers
   - Implement rate limiting at server level (nginx/Apache)

### Server Requirements
- PHP 5.3.7+ (recommended: PHP 7.4+)
- cURL extension enabled
- OpenSSL for HTTPS requests
- mod_rewrite (Apache) or equivalent URL rewriting

## Customization

### Adding FAQs
Replace `[FAQ_INSERTION_POINT]` in the system prompt with your specific FAQ content:

```php
$faq_content = "
Frequently Asked Questions:
1. Q: How much does it cost? A: Our basic plan starts at 99 AED/month...
2. Q: Do you support VAT? A: Yes, we automatically calculate 5% UAE VAT...
";

$this->system_prompt = str_replace('[FAQ_INSERTION_POINT]', $faq_content, $this->system_prompt);
```

### Styling Customization
Modify the CSS in `application/views/chatbot_widget.php` to match your brand colors and styling.

### Language Support
Add new languages by extending the `i18n` object in `assets/js/chatbot.js`.

## Troubleshooting

### Common Issues

**"OpenAI API key not configured"**
- Verify `.env` file exists and contains valid `OPENAI_API_KEY`
- Check file permissions on `.env`

**"Invalid security token"**
- Ensure CSRF protection is enabled in config
- Frontend should get fresh token before each request

**Streaming not working**
- Verify server supports streaming responses
- Check for output buffering or proxy interference
- Test with cURL first

**Arabic text not displaying correctly**
- Ensure UTF-8 encoding throughout
- Verify RTL CSS is loading properly
- Check font support for Arabic characters

### Performance Issues
- Reduce `OPENAI_MAX_TOKENS` to speed up responses
- Implement conversation caching
- Add request queuing for high traffic

## License

This chatbot integration is part of the Amaziverse invoicing system.

## Support

For technical support or customization requests, contact the development team.
