# Release Workflow

Use Git tags as the release source of truth. Do not maintain a `version` field in `composer.json`.

## Minimal Process

1. Make changes.
2. Commit them.
3. Tag the release:
   - `git tag 1.0.3`
4. Push commit and tag:
   - `git push origin main`
   - `git push origin 1.0.3`

## Consuming Projects

Update the package in each Craft project:

- `ddev composer update bgd/craft-site-toolkit`

If the plugin is not installed yet:

- `ddev exec php craft plugin/install site-toolkit`

## Notes

- Keep shared macros under `templates/_macros/`.
- Keep shared templates under `templates/global/`.
- Prefer semver tags like `1.0.0`, `1.0.1`, `1.0.2`.
