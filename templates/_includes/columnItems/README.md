# Plugin Column Items

These column items are provided by `bgd/craft-site-toolkit` and are loaded with a local-first fallback:

- `article`
- `card`
- `cta`
- `faqs`
- `formItem`
- `gallery`
- `image`
- `multiColumn`
- `plainText`
- `quote`
- `statistic`
- `testimonial`
- `text`

Override pattern:

- Create a matching file in `templates/_includes/columnItems/`.
- Example: `templates/_includes/columnItems/image.twig`
- If the local file exists, the project version is used.
- If it does not, Craft falls back to `site-toolkit/_includes/columnItems/<handle>.twig`.

This file is maintained in the plugin and copied into the project on Composer install/update.
