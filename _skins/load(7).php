var placeholder_configs=[{pattern:'experimental/ranges',placeholder:'cpp/ranges-placeholder',matched:'cpp/experimental/ranges',unmatched:'cpp'},{pattern:'experimental/ranges',placeholder:'cpp/ranges-functional-placeholder',matched:'cpp/experimental/ranges/functional',unmatched:'cpp/utility/functional/ranges'},{pattern:'experimental/ranges',placeholder:'cpp/ranges-algorithm-placeholder',matched:'cpp/experimental/ranges/algorithm',unmatched:'cpp/algorithm/ranges'},{pattern:'experimental/ranges',placeholder:'cpp/ranges-utility-placeholder',matched:'cpp/experimental/ranges/utility',unmatched:'cpp/utility/ranges'},{pattern:'experimental/ranges',placeholder:'cpp/ranges-iterator-placeholder',matched:'cpp/experimental/ranges/iterator',unmatched:'cpp/iterator/ranges'},{pattern:'experimental/ranges',placeholder:'cpp/ranges-dangling-placeholder',matched:'cpp/experimental/ranges/iterator',unmatched:'cpp/ranges'},{pattern:'experimental/ranges',placeholder:'cpp/ranges-ranges-placeholder',matched:
'cpp/experimental/ranges/range',unmatched:'cpp/ranges'}];$.each(placeholder_configs,function(i,cf){if(mw.config.get('wgTitle').includes(cf.pattern)){$(function(){$('a[href*="'+cf.placeholder+'"]').each(function(){this.href=this.href.replace(cf.placeholder,cf.matched);});});}else{$(function(){$('a[href*="'+cf.placeholder+'"]').each(function(){this.href=this.href.replace(cf.placeholder,cf.unmatched);});});}});;mw.loader.state({"site":"ready"});
/* cache key: mwiki1-mwiki_en_:resourceloader:filter:minify-js:7:f9d0cb41f59c85e6ca1a4daa2bdeb493 */
/* Cached 20241214124244 */