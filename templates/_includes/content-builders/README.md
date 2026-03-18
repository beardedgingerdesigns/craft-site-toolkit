# Plugin Content Builders

These content builder templates are provided by `bgd/craft-site-toolkit` and are loaded with a local-first fallback:

- `contentBuilder`
- `simpleContentBuilder`
- `blogContentBuilder`

Override pattern:

- Create a matching file in `templates/_includes/content-builders/`.
- Example: `templates/_includes/content-builders/contentBuilder.twig`
- If the local file exists, the project version is used.
- If it does not, Craft falls back to `site-toolkit/_includes/content-builders/<handle>.twig`.

This file is maintained in the plugin and copied into the project on Composer install/update.
