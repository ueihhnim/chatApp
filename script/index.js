function blinkText(selector, sender) {
    if (typeof sender != 'undefined') {
        document.getElementsByClassName("login").disabled = true;
    }
    $(selector).addClass('ios-shake-incorrect-passcode');
    setTimeout(function () {
        $(selector).removeClass("ios-shake-incorrect-passcode");
        if (typeof sender != 'undefined') {
            document.getElementsByClassName("login").disabled = false;
        }
    }, 450);
}

function searchList() {
	var text = $('.searchtb').val();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
			// console.log(this.responseText);
			$('div#search-list').html(this.responseText);
            resizeWindow();
        }
    };
    xmlhttp.open("GET", "controller/index_search.php?t=" + $('#searchtb').val(), true);
    xmlhttp.send();
}

function resizeWindow() {
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    $('div#search-list').css('height', (h - 150) + 'px');
    $('div#chatmain').css('width', (w - 360) + 'px');
    $('div#chatmain').css('height', (h - 150) + 'px');
    $('div#messagePanel').css('height', (h - 260) + 'px');
    $('textarea#chatmessage').css('width', (w - 510) + 'px');
}

var friend_id = -1;
function openChat(id) {
    document.getElementById('chatmessage').disabled = false;
    document.getElementById('chatmessage').focus();
    friend_id = id;
    var ali = $('a[id="id' + id + '"]').text();
    $('title').text(ali);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
			// console.log(this.responseText);
			$('div#messagePanel').html(this.responseText);
            var div = document.getElementById("messagePanel");
            div.scrollTop = div.scrollHeight;
        }
    };
    xmlhttp.open("GET", "controller/index_openchat.php?id=" + id, true);
    xmlhttp.send();
}

function sendMessage() {
    var text = $('textarea#chatmessage').val();
    $('textarea#chatmessage').val('');
	if (text.trim() == '') return;
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
			// console.log(this.responseText);
			$('div#messagePanel').html(this.responseText);
            // scroll to end
            var div = document.getElementById("messagePanel");
            div.scrollTop = div.scrollHeight;
            // send xong update lại user list
            searchList();
        }
    };
    xmlhttp.open("GET", "controller/index_sendmessage.php?m=" + text.trim().replace('\n', '<br />') + "&f=" + friend_id, true);
    xmlhttp.send();
}

