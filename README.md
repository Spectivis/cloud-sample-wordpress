# WordPress sample for Spectivis Cloud

A repository with only `wp-content`. Spectivis Cloud adds WordPress itself at build time, creates the database and the secret keys, and keeps `wp-content` (themes, plugins, uploads) between deploys.

- `wp-content/themes/fieldnotes`: a small custom theme, to show that your own theme deploys with the site.

Deploy it as a WordPress app, open the address and finish the WordPress installer, then activate the Fieldnotes theme under Appearance.
