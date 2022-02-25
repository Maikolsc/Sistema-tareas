function accents_supr(data){
    return ! data ?
        '' :
        typeof data === 'string' ?
            data
                .replace( /\n/g, ' ' )
                .replace( /[áàäâ]/g, 'a' )
                .replace( /[éèëê]/g, 'e' )
                .replace( /[íìïî]/g, 'i' )
                .replace( /[óòöô]/g, 'o' )
                .replace( /[úùüû]/g, 'u' ):
            data;
 
jQuery.extend( jQuery.fn.dataTableExt.oSort,
{
    "spanish-string-asc"  : function (s1, s2) { return s1.localeCompare(s2); },
    "spanish-string-desc" : function (s1, s2) { return s2.localeCompare(s1); }
});
 
jQuery.fn.DataTable.ext.type.search['spanish-string'] = function ( data ) {
    return accents_supr(data);       
}