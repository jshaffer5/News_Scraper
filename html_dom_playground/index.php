<?php
require('simple_html_dom.php');

$html = new simple_html_dom();
$html->load_file('https://blog.discoveryeducation.com/blog/category/trending-topics/');

$articles = $html->find('div.subcat', 0);
foreach ( $articles->find('div.subcat-title') as $articleSub ) {
    echo $articleSub->prev_sibling();
    echo $articleSub . '<br>';
}

//****EXAMPLE - TRAVERSING DOM****//
// $foo = $html->find('div.subcat', 0);
// $bar = $foo->find('div.subcat-title', 0)->children(0)->title;
// echo '$bar: ' . $bar . '<br>';


// $div = $html->find('div.subcat-title');
// if(isset($div)) {
//     echo 'subcat exist! <br>';
// } else {
// echo 'subcat not found :( <br>';
// }

