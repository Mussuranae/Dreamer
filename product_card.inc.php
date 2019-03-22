<?php

$products = [
    //1st card
    'Trip to Florence' => ['https://viaimage3.viafrance.com/img/img-1000x500/2/9/5/295663_1000x500.jpg?width=400&height=250&mode=crop',
        'Cradle of the Renaissance, romantic, enchanting and utterly irresistible, Florence
            (Firenze) is a place to feast on world-class art and gourmet Tuscan cuisine.
            Few cities are so compact size or so packed with extraordinary art.', '$895.90',
        'https://besthqwallpapers.com/Uploads/18-4-2018/48880/thumb-santo-spirito-florence-evening-sunset-italy.jpg',
        'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit
            quis arcu ornare laoreet. Curabitur adipiscing luctus massa.'],

    //2nd cards
    'Trip to Indonesia' => ['https://onpartquand.fr/wp-content/uploads/2017/10/budget-indon%C3%A9sie-couv-400x250.jpg',
        "This beguiling nation of over 17,000 islands has massive potential for adventures. It's
            hard to beat Indonesia for the sheer range of experiences on offer. Sitting in the open
            door of a train whizzing across Java.", '$1159.90', 'https://subocea.com/uploads/media/default/0001/03/1189b1e0ea94033de1f683ba6dc2b52a7fb121ed.jpeg',
        'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit
            quis arcu ornare laoreet. Curabitur adipiscing luctus massa.'],

    //3rd cards
    'Trip to Wild Code School' => ['https://3.bp.blogspot.com/-fBg6APej8Fc/V82oMXn20CI/AAAAAAAAUlg/XIPx0M3KkWwoDk5eh6ROoezu6CfH4ij4wCLcB/s1600/WildCodeSchool_CampusLyon_Ouest.JPG',
        "Become a web developer by completing our 5-month training programme in web development.
            Before you start at one of our schools, we invite you to learn the basics of coding,
            free of charge, on our online platform.", '$6000.00', 'https://wildcodeschool.fr/wp-content/uploads/2017/04/IMG_20170224_144600.jpg',
        'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit
            quis arcu ornare laoreet. Curabitur adipiscing luctus massa.'],

    //4th cards
    'Trip to Thailand' => ['https://www.climatsdumonde.biz/images/photo/B_660_ScallopBar1_[400].jpg',
        "Friendly and fun-loving, cultured and historic, Thailand radiates a golden hue, from its
            glittering temples and tropical beaches through to the ever-comforting Thai smile.", '$950.90',
        'https://voyage-vietnam.asia/images/tour/items/img1/fascinating-thailand-vietnam-itinerary10d-400.jpg',
        'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit
            quis arcu ornare laoreet. Curabitur adipiscing luctus massa.'],

    //5th cards
    'Trip to Japan' => ['https://blog-cdn.routeperfect.com/wp-content/uploads/2018/12/05144154/shutterstock_230107657-400x250.jpg',
        "Japan is truly timeless, a place where ancient traditions are fused with modern life as
            if it were the most natural thing in the world. Wherever you are in Japan, it seems,
            you're never far from a great meal.", '$1399.90',
        'http://www.travelpack.com/public/imagedb/sysimgdocs/rszimages/Amazing-Japan_pk26300_1.gif',
        'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit
            quis arcu ornare laoreet. Curabitur adipiscing luctus massa.'],

    //6th cards
    'Trip to Norway' => ['http://sun-surfer.com/photos/2012/02/Aurora-Borealis-400x250.jpg',
        "The essence of Norway's appeal is remarkably simple: this is one of the most beautiful
            countries on earth. Glaciers, grand and glorious, snake down from ice fields that rank
            among Europe's largest.", '$1500.90',
        'https://www.rivagesdumonde.fr/images/xftrdm/CROFRXDK005208-3012/17608.jpg',
        'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit
            quis arcu ornare laoreet. Curabitur adipiscing luctus massa.'],
];

$index = 0;
foreach ($products as $k => $v) {
    $titreCard = $k;
    $imagePresentation = $v[0];
    $description = $v[1];
    $price = $v[2];
    $moreInfoImage = $v[3];
    $moreInfoText = $v[4];
    $compteur = $index++;
    include "cards.inc.php";
}