<?php
require_once("configs.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" xmlns:xml="http://www.w3.org/XML/1998/namespace" class="chrome chrome8">
<head>
<title><?php echo $website['title']; ?></title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.ico" type="image/x-icon" />
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v15" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v15" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v15" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v15" /><![endif]-->
<link title="World of Warcraft - News" href="wow/en/feed/news" type="application/atom+xml" rel="alternate" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css?v3" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/community/community-index.css?v3" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/community/community-ie.css?v3" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/community/community-ie6.css?v3" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie.css?v3" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie6.css?v3" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie7.css?v3" /><![endif]-->
<style type="text/css">
.bnr04 .banner-title, .bnr04 .banner-desc, .bnr04:hover .banner-desc  {color:#625841;}
.bnr04 {border:1px solid #261e16; cursor:default;}
.bnr04:hover {background-position:0 0; border:1px solid #261e16; cursor:default;}
</style>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js?v15"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v15"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = 'wow/static';
Core.baseUrl = 'wow/en';
Core.project = 'wow';
Core.locale = 'en-gb'
Core.buildRegion = 'eu';
Core.loggedIn = true;
Flash.videoPlayer = 'http://eu.media.blizzard.com/wow/player/videoplayer.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/wow/player/rating-pegi.jpg';
//]]>
</script>
<body class="en-gb community-home"><div id="predictad_div" class="predictad" style="display: none; left: 788px; top: 104px; width: 321px; "></div>

<div id="wrapper">
<?php
$page_cat = "community";
include("header.php");
?>
<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li><a href="index.php" rel="np"><?php echo $website['title']; ?></a></li>
<li class="last"><a href="community.php" rel="np">Community</a></li>
</ol>
</div>
<div class="content-bot">			
	<div class="top-banner">
    <script type="text/javascript" src="wow/static/local-common/js/slideshow.js"></script>
    <script type="text/javascript" src="wow/static/local-common/js/third-party/swfobject.js"></script>

    <div id="slideshow">
        <div class="container">
			<?php
				$query = mysql_query("SELECT * FROM community_slides ORDER BY id DESC LIMIT 4");
				$i=0;
				while($community = mysql_fetch_array($query)){
					if($i==0){
					echo '<div class="slide" id="slide-'.$i.'" style="background-image: url(\'images/community/'.$community['image'].'\'); opacity: 0.997084;"></div>';
					}else{
					echo '<div class="slide" id="slide-'.$i.'" style="background-image: url(\'images/community/'.$community['image'].'\'); display: none; "></div>';
					}
					$i++;
				}
			?>
			<!--
				<div class="slide" id="slide-0" style="background-image: url(http://eu.media4.battle.net/cms/carousel_header/E7ODLCU7DOXM1292427396591.jpg); opacity: 0.997084;"></div>
				<div class="slide" id="slide-1" style="background-image: url(http://eu.media2.battle.net/cms/carousel_header/XRXPB47F3QF91291995637312.jpg); display: none; "></div>
				<div class="slide" id="slide-2" style="background-image: url('http://eu.media2.battle.net/cms/carousel_header/LJ9NRL6DTH091288953375465.jpg'); display: none;"></div>
				<div class="slide" id="slide-3" style="background-image: url('community/community01.png'); display: none;"></div>
			-->
		</div>
		
		<div class="paging">
			<?php
				$query2 = mysql_query("SELECT * FROM community_slides ORDER BY id DESC LIMIT 4");
				$i=0;
				while($communityx = mysql_fetch_assoc($query2)){
					echo '<a href="javascript:;" id="paging-'.$i.'" onclick="Slideshow.jump('.$i.', this);"';
					if($i==0){ echo 'class="curent"'; }else if($i==3){ echo 'class="last-slide"'; }
					echo'>
					<span class="paging-title">'.$communityx['title'].'</span>
					<span class="paging-date">'.$communityx['date'].'</span>
					</a>';
					$i++;
				}
			?>
		</div>
		<?php
		$query3 = mysql_query("SELECT * FROM community_slides ORDER BY id DESC LIMIT 1");
		$communityz = mysql_fetch_assoc($query3);
		echo '<div class="caption" style="display: block; opacity: 0.958656; "><h3><a href="#" class="link"> '.$communityz['title'].'</a></h3>'.$communityz['desc'].'</div>';
		?>
		<div class="preview"></div>
		<div class="mask"></div>
    </div>

	<script type="text/javascript">
	//<![CDATA[
        $(function() {
            Slideshow.initialize('#slideshow', [
				<?php
				$getting_lastq = mysql_query("SELECT * FROM community_slied ORDER BY id DESC");
				$getting_last = mysql_fetch_assoc($getting_lastq);
				$last=$getting_last['id']-4;
				$query = mysql_query("SELECT * FROM community_slides WHERE id >= '".$last."' ORDER BY id ASC LIMIT 4");
				$i=0;
				while($community = mysql_fetch_assoc($query)){
					echo '
					{
					image: "'.$community['image'].'",
					desc: "'.$community['desc'].'",
                    title: "'.$community['title'].'",
                    url: "'.$community['url'].'",
					id: "'.$community['id'].'"
					}';
					if($i!=3) echo ',';
					$i++;
				}
				?>
            ]);
        });
	//]]>
	</script>
	</div>
	
	<div class="community-content-body">
		<div class="body-wrapper">
			<div class="content-wrapper">
				<div class="inside-col">				
					<div class="official-content">
						<div class="inside-section contests">
							<a href="javascript:;" target="_blank" class="main-link" style="background-image:url('wow/static/images/community/thumbnails/thumb-contests.jpg');">
								<span>
									<span class="wrapper">
										<span class="banner-title">Contests </span>
										<span class="banner-desc">Past and present contests for you to check out and participate in. Check it out now!</span>
									</span>
								</span>
							</a>
						</div>
						
						<div class="inside-section forum">
							<a href="javascript:;" class="main-link" style="background-image:url('wow/static/images/community/thumbnails/thumb-forum.jpg');">
								<span>
									<span class="wrapper">
										<span class="banner-title">Forums <em>(In Development)</em></span>
										<span class="banner-desc">Get in touch with other Blizzard gamers via the official World of Warcraft forums.</span>
									</span>
								</span>
							</a>
						</div>
						
						<span class="clear"><!-- --></span>
						
						<div class="inside-section fanart">
							<a href="javascript:;" class="main-link" style="background-image:url('wow/static/images/community/thumbnails/thumb-fanart.jpg');">
								<span class="panel">
									<span class="wrapper">
										<span class="banner-title">Fan Art </span>
										<span class="view-all">View All Fan Art</span>
									</span>
								</span>
							</a>
								<a href="#" class="tosubmit external">Submit Fan Art</a>
						</div>
						
						<div class="inside-section comics">
							<a href="javascript:;" class="main-link" style="background-image:url('wow/static/images/community/thumbnails/thumb-comics.jpg');">
								<span class="panel">
									<span class="wrapper">
										<span class="banner-title">Comics <em>(0)</em></span>
										<span class="view-all">View All Comics</span>
									</span>
								</span>
							</a>
								<a href="#" class="tosubmit external">Submit Comics</a>
						</div>
						
						<span class="clear"><!-- --></span>
						
						<div class="inside-section screenshot">
							<a href="javascript:;" class="main-link" style="background-image:url('wow/static/images/community/thumbnails/thumb-screenshot.jpg');">
								<span class="panel">
									<span class="wrapper">
										<span class="banner-title">Screenshots <em>(1)</em></span>
										<span class="view-all">View All Screenshots</span>
									</span>
								</span>
							</a>
								<a href="javascript:;" class="tosubmit external">Submit Screenshots</a>
						</div>
						
						<div class="inside-section wallpaper">
							<a href="javascript:;" class="main-link" style="background-image:url('wow/static/images/community/thumbnails/thumb-wallpaper.jpg');">
								<span class="panel">
									<span class="wrapper">
										<span class="banner-title">Fan Wallpapers <em>(0)</em></span>
										<span class="view-all">View All Wallpapers</span>
									</span>
								</span>
							</a>
								<a href="javascript:;" class="tosubmit external">Submit Wallpapers</a>
						</div>
						
						<span class="clear"><!-- --></span>
					</div>	
				</div>
				
				<div class="outside-col">
										
					<div class="outside-section social-media">
						<div class="title-block">
							<span class="title">Links</span>
							<span class="clear"><!-- --></span>
						</div>
						<div class="content-block">
							<ul>
								<li><a href="http://www.youtube.com" class="youtube" target="_blank"><span class="content-title">Youtube</span><span class="content-desc">YOUTUBE!!</span></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>		
		</div>	
	</div>
			
	<span class="clear"><!-- --></span>
</div>
</div>
</div>
<?php include("footer.php"); ?>
<div id="fansite-menu" class="ui-fansite"></div><div id="menu-container"></div><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 6; top: 0px; left: 0px; display: none; "></ul></body>
</html>