<?php

namespace Drupal\alternate_titles\Plugin\views\style;

use Drupal\views\Plugin\views\style\Table;

/**
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "alternate_titles",
 *   title = @Translation("Table with Alternate Titles"),
 *   help = @Translation("Same as tables with extra handling of alternate titles."),
 *   theme = "views_view_table",
 *   display_types = {"normal"}
 * )
 * 
 * No changes here from the base Table formatter. It has all the same options as a table formatted view, even if some are not used.
 * The difference will be in the views_post_execute hook in alternate_titles.module to sort by the displayed (alternate or primary) title.
 */
class AlternateTitles extends Table {

}
