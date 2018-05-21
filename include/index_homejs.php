		<script type="text/javascript">
            var currentLoaded = 0;
			$(document).ready(function(){
                // document.cookie = 'conversion_color=0084ff';
				$('title').text('Home');
				$(window).resize(resizeWindow);
                searchList(0);
				$('input#searchtb').on('keyup', function(e) {
					if (e.keyCode == 13) {
						searchList();
					}
				});
				$('input#searchbt').on('click', function(e) {
					searchList();
				});
				$('input#chatmessage').on('keyup', function(e) {
					if (e.keyCode == 13) {
						sendMessage($('#chatmessage').val());
					}
				});
				$('input#sendmessage').on('click', function(e) {
					sendMessage($('#chatmessage').val());
				});
				$('div#search-content').delegate('div.lbl.search-result, div.lbl.search-result-text', 'click', function() {
					$('div.lbl.search-result').removeClass('active-msg');
					$('div.lbl.search-result-text').removeClass('active-msg');
					this.classList.add('active-msg');
					var id = this.querySelector('div').id.substr(4);
					openChat(+id);
				});
                $('div#search-content').scroll(function() {
                    if (this.scrollTop == this.scrollHeight - this.clientHeight) {
                        loadMoreMsg();
                    }
                });
                $('div#search-content').on('mouseover', function(e) {
                    $('span.me').css('margin-right', '1px');
                });
                $('div#search-content').on('mouseleave', function(e) {
                    $('span.me').css('margin-right', '17px');
                });
                $('td.dot').on('click', changeConversionColor);
				$('#myModal').on('show.bs.modal', function () {
					checkConversionColor();
				});
			});
		</script>