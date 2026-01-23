# Prespa SaaS Theme - AI Coding Instructions

## Overview
Prespa SaaS is a WordPress child theme of "Prespa", designed specifically for SaaS companies. Built on WordPress 6.7+ block patterns architecture with FSE (Full Site Editing) support via `theme.json`.

## Architecture

### Theme Structure
- **Child Theme**: Inherits from parent theme "Prespa" - never modify parent theme files
- **Block Patterns**: Core content in `/patterns/*.php` - these are reusable page sections registered via WordPress Block Pattern API
- **Assets**: `/assets/img/ps-patterns/` contains all theme-specific imagery
- **Styling**: Combination of `theme.json` (design tokens) + `style.css` (custom animations/interactions)

### Block Pattern System
All patterns follow the naming convention: `{number}-ps-{descriptive-name}.php`
- Pattern files contain HTML comments with block markup (WordPress Gutenberg format)
- Each pattern starts with PHP comment block defining `Title`, `Slug`, and `Categories`
- Pattern category `prespa-saas` registered in [functions.php](functions.php) line 21-32

Example pattern structure:
```php
<?php
/**
  * Title: Pattern Name
  * Slug: prespa-saas/pattern-slug
  * Categories: prespa-saas
*/
?>
<!-- wp:group ... -->
```

## Design System

### Color Palette (from theme.json)
- Primary: `#356df1` (blue) - main brand color
- Accent: `#8a2be2` (blue-violet) - used for gradients and CTAs
- Gradient formula: `linear-gradient(90deg, #0091f8 0%, #8a2be2 68-72%, #d755e9 100%)`
- Neutral grays: `light-gray` (#f8f8f8), `gray-25` (#f9fafb), `gray-50` (#e1e1e1)
- Text: `text-primary` (#404040)

### Typography System
- **Headings**: Montserrat (700 weight) loaded from `/assets/fonts/`
- **Body**: Raleway (400, 600 weights) 
- Font sizes use fluid clamp() functions in [theme.json](theme.json#L264-L286)

### Spacing Scale
Defined in [theme.json](theme.json#L101-L121) using custom properties:
- `small`: `calc(var(--wp--preset--font-size--medium)*1.5)`
- `medium`: `calc(var(--wp--preset--font-size--medium)*2)`
- `large`: `calc(var(--wp--preset--font-size--medium)*3)`
- Reference as: `var:preset|spacing|medium` in block markup

## UI Patterns & Components

### Animation Classes
Located in [style.css](style.css) - add to block className:
- `p-animation-text-moveUp` - Fade-in slide-up on scroll (inherited from parent theme)
- `p-animation-zoom-in` - Scale-up animation (inherited from parent theme)
- `p-btn-animation-hover-arrow` - Button with animated arrow on hover
- `p-btn-animation-border-move` - Animated border on hover

### Custom Components

#### 1. prespa-saas-box
Pill-shaped badge with icon ([01-ps-header.php](patterns/01-ps-header.php#L27)):
```html
<div class="prespa-saas-box" style="border-radius:1.25rem;padding:0.38rem 0.75rem;border:1px solid #e3e3e3">
  <!-- Contains nasio-block/icon-block + text -->
</div>
```

#### 2. Animated Hero Icons
Floating animation on [01-ps-header.php](patterns/01-ps-header.php#L13-L22):
- Uses `.icon-top-left`, `.icon-top-right`, `.icon-bottom-left`, `.icon-bottom-right` classes
- CSS keyframe `prespa-saas-float-up-down` with staggered delays
- Icons pause animation and scale on hover

#### 3. Animated Text
`.prespa-saas-animated-text` class ([style.css](style.css#L18-L25)):
- Creates animated gradient text effect using `background-clip: text`
- Animation `prespa-saas-text-shine` moves gradient position

## Third-Party Dependencies

### Nasio Blocks Plugin (REQUIRED)
Many patterns depend on `nasio-block/*` custom blocks:
- `nasio-block/icon-block` - Custom SVG icons with inline SVG support
- `nasio-block/tabs` - Tab interface (see [08-ps-pricing-plans-premium.php](patterns/08-ps-pricing-plans-premium.php#L35))
- `nasio-block/accordion` - Collapsible FAQ sections ([09-ps-faq.php](patterns/09-ps-faq.php#L50))

**Important**: Theme will not render correctly without Nasio Blocks plugin active.

## Development Conventions

### When Adding New Patterns
1. Follow naming: `{next-number}-ps-{name}.php` in `/patterns/`
2. Include PHP docblock with Title, Slug (prespa-saas/slug), Categories (prespa-saas)
3. Use WordPress block comment syntax: `<!-- wp:blockname {json-attributes} -->`
4. Image paths: `<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/ps-patterns/filename.ext`
5. Always add animation classes to top-level container for scroll effects

### Customizer Defaults
[functions.php](functions.php#L37-L72) overrides parent theme customizer:
- Modify `prespa_customizer_values()` to change default colors/layout
- Uses WordPress Customizer API - settings persist in database

### CSS Specificity
- Global styles in [theme.json](theme.json#L287-L428) apply theme-wide
- Custom CSS in [style.css](style.css) uses `.prespa-saas-*` prefix to avoid conflicts with parent theme
- Block-specific styles use `.wp-block-*` classes (WordPress standard)

## Common Tasks

### Add New Color
1. Add to [theme.json](theme.json#L6-L60) `settings.color.palette[]` array
2. Reference as `var:preset|color|slug-name` in patterns

### Modify Button Styles
- Global defaults in [theme.json](theme.json#L289-L303) `styles.blocks.core/button`
- Override per-pattern using inline `style` attribute on button blocks
- Hover animations require className from [style.css](style.css#L137-L204)

### Update Font
1. Add font files to `/assets/fonts/`
2. Register in [theme.json](theme.json#L138-L201) `settings.typography.fontFamilies[]`
3. Set via [theme.json](theme.json#L340-L426) `styles.elements.*` or per-block

## Testing Requirements
- Test in WordPress 6.7+ with Prespa parent theme active
- Verify Nasio Blocks plugin installed and activated
- Responsive breakpoint: 40rem (640px) - see [style.css](style.css#L144-L167) media queries
- Browser targets: Modern evergreen browsers (CSS Grid, clamp(), CSS custom properties required)

## WordPress Integration Notes
- Block patterns auto-register on `init` hook (see [functions.php](functions.php#L19))
- Child theme stylesheet enqueued via [functions.php](functions.php#L11)
- No custom post types or taxonomies - pure block theme architecture
- FSE compatible - users can edit via Site Editor (Appearance → Editor)
