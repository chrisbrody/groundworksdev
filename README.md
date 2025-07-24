# GroundWorks Dev WordPress Theme

A custom WordPress theme for small business automation and monthly website services.

## Features

- **Responsive Design**: Mobile-first approach with clean, professional styling
- **Direct Content**: Hardcoded content for faster loading and simplified maintenance
- **Custom Post Types**: Case studies with detailed project information (ACF still used for case studies only)
- **Contact Form**: Built-in contact form with email processing
- **SEO Optimized**: Semantic HTML structure and proper heading hierarchy
- **Performance Focused**: Minimal dependencies and optimized code

## Installation

1. Upload theme files to `/wp-content/themes/groundworks-dev/`
2. Install Advanced Custom Fields Pro plugin (only required for case studies)
3. Activate the theme in WordPress admin
4. Set up ACF field groups for case studies (see Case Study ACF Setup below)
5. Create required pages and set front page
6. Configure navigation menu

## Required Pages

- **Home** (set as front page) - uses direct content in front-page.php
- **About** - uses direct content in page-about.php
- **Services** - uses direct content in page-services.php
- **Contact** - uses direct content in page-contact.php
- **Gov Transitions** - uses direct content in page-gov-transitions.php

## Theme Structure

```
groundworks-dev/
├── style.css
├── functions.php
├── index.php
├── header.php
├── footer.php
├── front-page.php          (direct content)
├── page-about.php          (direct content)
├── page-services.php       (direct content)
├── page-contact.php        (direct content)
├── page-gov-transitions.php (direct content)
├── single-case_study.php   (ACF fields)
├── archive-case_study.php  (ACF fields)
├── admin-post.php
├── js/main.js
├── screenshot.png
└── README.md
```

## Case Study ACF Setup

**Note**: Main pages (Home, About, Services, Contact, Gov Transitions) now use direct content hardcoded in their respective template files. ACF is only required for case studies and the site options.

### Case Study Fields (single-case_study.php)
Field Group: "Case Study Details"  
Location: Post Type = Case Study

```
Basic Info:
- client_type (Text)
- client_location (Text)

Case Study Content:
- challenge (Wysiwyg Editor)
- solution (Wysiwyg Editor)
- solution_features (Repeater)
  └── feature (Text)
- result (Wysiwyg Editor)
- result_metrics (Repeater)
  └── metric_number (Text)
  └── metric_label (Text)

Client Info (Optional):
- client_quote (Textarea)
- client_name (Text)
- client_title (Text)

Technical Details (Optional):
- technologies_used (Repeater)
  └── technology (Text)
```

### Site Options (Options Page)
Field Group: "Site Options"  
Location: Options Page = Site Options

```
Contact Information:
- contact_email (Email)
- contact_phone (Text)
- business_hours (Text)

Case Studies:
- case_studies_intro (Textarea)
```

## Setup Instructions

1. **Install Required Plugins:**
   - Advanced Custom Fields Pro (only for case studies)
   - Contact Form 7 (optional backup)

2. **Create Pages:**
   - Home (set as front page) - content is hardcoded
   - About - content is hardcoded
   - Services - content is hardcoded
   - Contact - content is hardcoded
   - Gov Transitions - content is hardcoded
   - Case Studies (optional - archive is auto-created)

3. **Set Up Navigation:**
   - Go to Appearance > Menus
   - Create main menu with: Home, About, Services, Case Studies, Contact, Gov Transitions
   - Assign to "Main Navigation" location

4. **Configure ACF (Case Studies Only):**
   - Create field groups for case studies using the guide above
   - Set up site options if needed

5. **Add Content:**
   - Main page content is already in template files - no ACF setup needed
   - Create case study posts with ACF data
   - Upload logo via Customizer

6. **Test Contact Form:**
   - Ensure WordPress can send emails
   - Test form submission and email delivery

## Customization

Main page content is hardcoded in template files for better performance and easier maintenance. To edit content, modify the respective PHP template files directly. Case study content is still managed via ACF fields. The theme uses a green (#2c5530) and orange (#ff6b35) color scheme that can be customized in the style.css file.

## Support

This theme is designed for SiteGround hosting with modern WordPress. For customization needs, contact GroundWorks Development.