<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php defined('THEME_VERSION') or define('THEME_VERSION', 'v2.1') ?>

<?php $desa_title = trim(ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa']); ?>

<meta content="utf-8" http-equiv="encoding">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='viewport' content='width=device-width, initial-scale=1' />
<meta name='google' content='notranslate' />
<meta name='theme' content='Cosmo' />
<meta name='designer' content='Diki Siswanto' />
<meta name='theme:designer' content='Diki Siswanto' />
<meta name='theme:version' content='<?= THEME_VERSION ?>' />
<meta name="theme-color" content="#efefef">
<meta name='keywords' content="Sistem Informasi <?= $desa_title ?> Kecamatan <?= $desa['nama_kecamatan']; ?> Kabupaten <?= $desa['nama_kabupaten']; ?>, web desa, opensid, opensid cosmo, website desa, Website <?= $desa_title ?> Kecamatan <?= $desa['nama_kecamatan']; ?> Kabupaten <?= $desa['nama_kabupaten']; ?>" />
<meta property="og:site_name" content="Sistem Informasi <?= $desa_title ?>"/>
<meta property="og:type" content="article"/>
<link rel="canonical" href="<?= site_url() ?>"/>
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
<meta name="subject" content="Situs Web Desa">
<meta name="copyright" content="<?= $desa_title ?>">
<meta name="language" content="Indonesia">
<meta name="revised" content="Sunday, July 18th, 2010, 5:15 pm"/>
<meta name="Classification" content="Government">
<meta name="url" content="<?= site_url() ?>">
<meta name="identifier-URL" content="<?= site_url() ?>">
<meta name="category" content="Sistem Informasi Desa, Pemerintahan">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="imagetoolbar" content="no"/>
<meta name="revisit-after" content="7"/>
<meta name="webcrawlers" content="all"/>
<meta name="rating" content="general"/>
<meta name="spiders" content="all"/>
<link rel="alternate" type="application/rss+xml" title="Feed <?= $desa_title ?>" href="<?= site_url('sitemap') ?>"/>  

<?php if(isset($single_artikel)): ?>
  <title><?= $single_artikel["judul"] . " - $desa_title" ?></title>
  <meta name='description' content="<?= str_replace('"', "'", substr(strip_tags($single_artikel['isi']), 0, 400)); ?>" />
  <meta property="og:title" content="<?= $single_artikel["judul"];?>"/>
  <meta itemprop="name" content="<?= $single_artikel["judul"];?>"/>
  <meta itemprop='description' content="<?= str_replace('"', "'", substr(strip_tags($single_artikel['isi']), 0, 400)); ?>" />
  <?php if (trim($single_artikel['gambar'])!=''): ?>
    <meta property="og:image" content="<?= base_url()?><?= LOKASI_FOTO_ARTIKEL?>sedang_<?= $single_artikel['gambar'];?>"/>
    <meta itemprop="image" content="<?= base_url()?><?= LOKASI_FOTO_ARTIKEL?>sedang_<?= $single_artikel['gambar'];?>"/>
  <?php endif; ?>
  <meta property='og:description' content="<?= str_replace('"', "'", substr(strip_tags($single_artikel['isi']), 0, 400)); ?>" />
<?php else: ?>
  <title><?php $tmp = ltrim(get_dynamic_title_page_from_path(), ' -'); echo (trim($tmp)=='') ? "Sistem Informasi " . $desa_title : "$tmp - $desa_title"; ?></title>
  <meta name='description' content="Sistem Informasi <?= $desa_title ?> Kecamatan <?= $desa['nama_kecamatan']; ?> Kabupaten <?= $desa['nama_kabupaten']; ?>" />
  <meta itemprop="name" content="<?= $desa_title ?>"/>
  <meta property="og:title" content="<?php $tmp = ltrim(get_dynamic_title_page_from_path(), ' -'); echo (trim($tmp)=='') ? $desa_title : "$tmp - $desa_title"; ?>"/>
  <meta property='og:description' content="Sistem Informasi <?= $desa_title ?> Kecamatan <?= $desa['nama_kecamatan']; ?> Kabupaten <?= $desa['nama_kabupaten']; ?>" />
<?php endif; ?>
<meta property='og:url' content="<?= current_url(); ?>" />
<?php if(is_file(LOKASI_LOGO_DESA . "favicon.ico")): ?>
<link rel="shortcut icon" href="<?= base_url() . LOKASI_LOGO_DESA?>favicon.ico" />
<?php else: ?>
<link rel="shortcut icon" href="<?= base_url('favicon.ico')?>" />
<?php endif; ?>
<noscript>
  You must have JavaScript enabled in order to use this theme. Please enable JavaScript and then reload this page in order to continue.
</noscript>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-providers/1.6.0/leaflet-providers.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl/1.11.1/mapbox-gl.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl-leaflet/0.0.12/leaflet-mapbox-gl.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
<script src="<?= base_url('assets/js/peta.js') ?>"></script>
<script>const BASE_URL = '<?= base_url() ?>';	</script>