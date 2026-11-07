# ZOLAHA: Comprehensive Keyword Research & AI Design Blueprint (2026)
> **Strategic Master Plan: Search Intent Mapping, SEO Taxonomy, and UI/UX Design System Specification**  
> *Formulated using Google 2026 Core Standards and the `ui-ux-pro-max` Design Intelligence Engine.*

---

## Part 1: High-Intent Keyword Research & Traffic Mapping

Utility websites do not rank on vanity keywords; they rank on **Active Need (High-Intent Utility Queries)**. We have segmented Zolaha's search traffic into 3 distinct tiers:

### Tier 1: Flagship India-Specific Exam & Government Form Resizers (Immediate High Volume)
These users are actively filling government job applications on mobile phones or laptops and getting upload errors.

| Target Keyword | Monthly Search Intent | Competition | Target URL | Primary User Pain Point |
|---|---|---|---|---|
| `ssc photo resize 50kb` | 50,000 - 150,000 | Medium | `/tools/ssc-photo-resizer/` | Portal rejects files > 50KB or wrong pixels (200x230) |
| `upsc photo and signature resizer` | 30,000 - 80,000 | Low-Med | `/tools/upsc-photo-signature-resizer/` | OTR registration requires exact KB + white background |
| `ssc cgl signature size 10 to 20 kb` | 20,000 - 60,000 | Low | `/tools/ssc-signature-resizer/` | Signature upload fails if > 20KB |
| `compress jpg to 50kb online` | 70,000 - 200,000 | Medium | `/tools/compress-image-50kb/` | Generic need for 50KB limit across state exams |
| `compress jpg to 20kb online` | 40,000 - 120,000 | Medium | `/tools/compress-image-20kb/` | Strictly required for thumb impressions and signatures |
| `passport size photo maker 50kb` | 30,000 - 90,000 | Low-Med | `/tools/passport-photo-maker/` | Mobile selfie to standard 3.5cm x 4.5cm passport crop |

### Tier 2: Universal Prosumer & Media Utilities (Evergreen Global Search)
These provide recurring organic traffic and attract natural backlinks from blogs and forums.

| Target Keyword | Target URL | Intent Profile |
|---|---|---|
| `bulk image compressor in browser` | `/tools/bulk-image-compressor/` | Photographers/Designers needing fast offline compression |
| `convert png to webp offline free` | `/tools/png-to-webp/` | Web developers wanting fast client-side format conversion |
| `client side pdf merger private` | `/tools/private-pdf-merger/` | Corporate/Privacy-conscious users handling bank statements |

### Tier 3: Brand & Product Studio Identity
| Target Keyword | Target URL | Purpose |
|---|---|---|
| `Zolaha` / `Zolaha Tools` | `zolaha.com` | Brand authority, direct navigation, navigation searches |
| `privacy first free web utilities` | `zolaha.com/products/` | Positioning against ad-bloated sites (e.g., Smallpdf, iLovePDF) |

---

## Part 2: Zolaha URL Taxonomy & Information Architecture

To prevent keyword cannibalization and maximize domain authority, every page has a distinct job:

```
zolaha.com (The Product Studio Portal)
├── /products/ (Directory of all live tools & upcoming apps)
├── /tools/
│   ├── /ssc-photo-resizer/ (Preset: 20-50KB, 200x230px, JPG)
│   ├── /upsc-photo-signature-resizer/ (Preset: 20-50KB photo, 10-20KB sign)
│   ├── /compress-image-50kb/ (Preset: Exact target slider locked at 50KB)
│   ├── /compress-image-20kb/ (Preset: Exact target slider locked at 20KB)
│   └── /bulk-image-optimizer/ (Batch WebP/JPEG compressor)
├── /about/ (Brand story: 2020 journey, mission, founder E-E-A-T profile)
├── /privacy/ (Strict Zero-Server Upload guarantee, GDPR/DPDP compliance)
└── /terms/ (Usage terms, disclaimer, AdSense requirement)
```

---

## Part 3: Zolaha Homepage Design System

The homepage uses a light, editorial product directory rather than a generic SaaS dashboard. The studio story and real product status lead; unfinished products are described plainly instead of being shown with invented interface metrics.

### 1. Color tokens

| Token | Value | Role |
|---|---|---|
| `--bg-page` | `#F8FAFC` | Main page background |
| `--bg-surface` | `#FFFFFF` | Product cards and navigation |
| `--bg-surface-elevated` | `#F8FAFC` | Search filters and task labels |
| `--text-primary` | `#0F172A` | Headings and primary text |
| `--text-secondary` | `#334155` | Body text |
| `--text-muted` | `#64748B` | Supporting labels |
| `--border-subtle` | `#E2E8F0` | Card and control borders |
| `--zolaha-mantis` | `#047857` | Brand actions and selected filters |

Dark mode uses flat charcoal surfaces and a lighter green action color. Gradients are limited to the hero heading.

### 2. Typography and layout

* **Typeface:** Manrope, with no secondary display font.
* **Type scale:** 36px mobile hero, 60px desktop hero, 30px mobile section title, 36px desktop section title, 16px body, and 12px metadata.
* **Page structure:** Plain-spoken studio introduction with a direct link to the available tool, searchable product directory, a short brand promise, and product principles.
* **Controls:** Minimum 44px touch targets, visible keyboard focus, a full height mobile menu, and a reduced motion fallback.
* **Content rule:** Do not publish made up usage counts, speed claims, testimonials, or product screens. Mark work in progress as unavailable.

---

## Part 4: Step-by-Step Execution Plan

```
[Phase 1: Keyword & Specs Architecture]  <-- COMPLETED
                 │
                 ▼
[Phase 2: Zolaha Brand Theme CSS & Assets]  <-- COMPLETED
  • Design tokens (colors, typography, cards)
  • Reusable CSS classes for WordPress
                 │
                 ▼
[Phase 3: Flagship Tool Engine (Universal Resizer)]
  • Pure Client-Side HTML5 Canvas + WebAssembly
  • One-click presets: SSC (50KB), UPSC (20KB), Custom
  • Zero server upload, runs 100% in browser
                 │
                 ▼
[Phase 4: WordPress Integration & Live Deployment]
  • Embed shortcode into Hostinger WordPress
  • Add schema & SEO content via 2026 Content Guide
```

---
*Created for Zolaha.com | Powered by AI Design Skill (`ui-ux-pro-max`) & Google 2026 Search Standards*
