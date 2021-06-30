
<?php
$page_id = get_the_ID();
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));
if($page_id == 11368 || $page_id == 11325 || $page_id == 11044 || $page_id == 11854 || $page_id == 11863 || $page_id == 12076 || $page_id == 12035 || $page_id == 12141 || $page_id == 12163 || $page_id == 12152 || $page_id == 12527 || $page_id == 12508)
{
?>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@graph": [
{
"@type": "LegalService",
"name": "Atlanta Family & Immigration Law",
"image": "https://atlfamilyimmigrationlaw.com/wp-content/uploads/2020/09/logo_registered.png",
"url": "<?php echo $current_url; ?>",
"@id": "<?php echo $current_url; ?>",
"address": {
"@type": "PostalAddress",
"addressLocality": "Atlanta",
"addressRegion": "GA",
"postalCode": "30344",
"streetAddress": "2860 Church St",
"AddressCountry": "U.S.A."
},
"telephone": "(678) 721-8707",
"hasMap": "https://g.page/atlfamilylawimmigration?share",
"geo": {
"@type": "GeoCoordinates",
"latitude": "33.6771992",
"longitude": "-84.444199"
},
"description": "Whether you need help with a divorce or a child custody matter, have a landlord-tenant issue or are trying to obtain citizenship or get a visa, we can help. Let us help guide you on your next step.",
"makesOffer": ["Family and Immigration Lawyer"],
"priceRange": "$",
"memberOf": {
"@type" : "Organization",
"url" : "https://atlfamilyimmigrationlaw.com/"
}
,
"aggregateRating": {
"@type": "AggregateRating",
"itemReviewed": "Atlanta Family & Immigration Law",
"ratingValue": 5.0,
"reviewCount": 57,
"bestRating": 5,
"worstRating": 0
},
"review": []
}
]
} </script>
<?php
}