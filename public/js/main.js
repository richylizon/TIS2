var table = '#mytable'
    $('#maxRows').on('change', function(){
        $('.pagination').html('')
        var trnum = 0
        var maxRows = parseInt($(this).val())
        var totalRows = $(table+' tbody tr').length
        $(table+' tr:gt(0)').each(function(){
            trnum++
            if(trnum > maxRows){
                $(this).hide()
            }
            if(trnum <= maxRows){
                $(this).show()
            }
        })
        if(totalRows > maxRows){
            var pagenum = Math.ceil(totalRows/maxRows)
            for(var i=1;i<=pagenum;){
                $('.pagination').append('<li data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show()
            }
        }
        $('.pagination li:first-child').addClass('active')
        $('.pagination li').on('click',function(){
            var pageNum = $(this).attr('data-page')
            var trIndex = 0;
            $('.pagination li').removeClass('active')
            $(this).addClass('active')
            $(table+' tr:gt(0)').each(function(){
                trIndex++
                if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                    $(this).hide()
                } else{
                    $(this).show()
                }
            })
        })
    })
    $(function(){
        $('table tr:eq(0)').prepend('<th>ID</th>')
        var id = 0;
        $('table tr:gt(0)').each(function(){
            id++
            $(this).prepend('<td>'+id+'</td>')
        })
    })


  (function( $ ) {
    $.widget( "ui.combobox", {
      _create: function() {
        var input,
          that = this,
          wasOpen = false,
          select = this.element.hide(),
          selected = select.children( ":selected" ),
          value = selected.val() ? selected.text() : "",
          wrapper = this.wrapper = $( "<span>" )
                .addClass( "ui-combobox" )
            .insertAfter( select );
 
        function removeIfInvalid( element ) {
          var value = $( element ).val(),
            matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( value ) + "$", "i" ),
            valid = false;
          select.children( "option" ).each(function() {
            if ( $( this ).text().match( matcher ) ) {
              this.selected = valid = true;
              return false;
            }
          });
 
          if ( !valid ) {
            // remove invalid value, as it didn't match anything
            $( element )
              .val( "" )
              .attr( "title", value + " didn't match any item" )
              .tooltip( "open" );
            select.val( "" );
            setTimeout(function() {
              input.tooltip( "close" ).attr( "title", "" );
            }, 2500 );
            input.data( "ui-autocomplete" ).term = "";
          }
        }
 
        input = $( "<input>" )
          .appendTo( wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "ui-state-default ui-combobox-input" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: function( request, response ) {
              var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
              response( select.children( "option" ).map(function() {
                var text = $( this ).text();
                if ( this.value && ( !request.term || matcher.test(text) ) )
                  return {
                    label: text.replace(
                      new RegExp(
                        "(?![^&;]+;)(?!<[^<>]*)(" +
                        $.ui.autocomplete.escapeRegex(request.term) +
                        ")(?![^<>]*>)(?![^&;]+;)", "gi"
                      ), "<strong>$1</strong>" ),
                    value: text,
                    option: this
                  };
              }) );
            },
            select: function( event, ui ) {
              ui.item.option.selected = true;
              that._trigger( "selected", event, {
                item: ui.item.option
              });
            },
            change: function( event, ui ) {
              if ( !ui.item ) {
                removeIfInvalid( this );
              }
            }
          })
          .addClass( "ui-widget ui-widget-content ui-corner-left" );
 
        input.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
          return $( "<li>" )
            .append( "<a>" + item.label + "</a>" )
            .appendTo( ul );
        };
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "ui-corner-right ui-combobox-toggle" )
          .mousedown(function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .click(function() {
            input.focus();
 
            // close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
 
        input.tooltip({
          tooltipClass: "ui-state-highlight"
        });
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
  })( jQuery );
 
  $(function() {
    $( "#combobox" ).combobox();
  });

  $(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
    e.preventDefault();
    var param = $(this).attr("href").replace("#","");
    var concept = $(this).text();
    $('.search-panel span#search_concept').text(concept);
    $('.input-group #search_param').val(param);
  });
});