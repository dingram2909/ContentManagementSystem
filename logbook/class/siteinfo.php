<?php
/**
 * A class that contains code to return info needed in various places on the site
 *
 * @author Lindsay Marshall <lindsay.marshall@ncl.ac.uk>
 * @copyright 2014 Newcastle University
 *
 */
    class SiteInfo
    {
/**
 * Get all the user beans
 *
 * @return array
 */
        public function users()
        {
            return R::find('user', '1 order by login');
        }
/**
 * Get all the page beans
 *
 * @return array
 */
        public function pages()
        {
            return R::find('page', '1 order by name');
        }
    }
?>
