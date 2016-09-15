# Businessx WordPress Theme #
Businessx is distributed under the terms of the GNU GPL v2.0.

### Changelog ###

**v1.0.3.2**
* Fix - Changed prefixes for post thumbnails from `bx` to `businessx`. Use Regenerate thumbnails to refresh them: https://wordpress.org/plugins/regenerate-thumbnails/;
* Fix - Unexpected error in `partials\headings\index-heading-no-sections.php`;
* Removed - Unnecessary tags in style.css;

**v1.0.3.1**
* Fix - `partials\partial-template-functions.php`, `businessx_footer_creds_copyright()` changed escaping and added translation functions;
* Fix - Removed translation escaping in `partials\partial-template-functions.php`, line 127;
* Fix - `partials\partial-template-helpers.php`, line 240, added escaping for `$pid`;
* Fix - `the_title()` arguments for before and after in `partials\headings\page-heading-full-width.php`;
* Fix - Unescape `get_search_query()` in `partials\headings\search-heading-full-width.php`, already escaped by Core;

**v1.0.3**
* Released on GitHub;
