# Plugin Body Blocks

These body blocks are provided by `bgd/craft-site-toolkit` and are loaded with a local-first fallback:

- `faqs`
- `headerBuilder`
- `headerBuilderSlider`
- `jumpNavigation`
- `multiColumn`
- `testimonials`
- `announcements`

Override pattern:

- Create a matching file in `templates/body_blocks/`.
- Example: `templates/body_blocks/faqs.twig`
- If the local file exists, the project version is used.
- If it does not, Craft falls back to `site-toolkit/body_blocks/<handle>.twig`.

This file is maintained in the plugin and copied into the project on Composer install/update.
