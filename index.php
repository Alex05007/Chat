<!DOCTYPE html>
<html>

<head>
    <title>Alex Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ddfdd0161.js" crossorigin="anonymous"></script>
</head>

<style>
body {
    margin: 0;
    padding: 0;
    background-color: #222;
    color: #fff;
	overflow:hidden;
}
.chat {
    width: calc(70% - 100px);
	height: 100vh - 140px;
	margin:0 !important;
    float: left;
	overflow:scroll;
	padding:70px 50px 70px 50px;
}

.me_top {
    padding: 20px;
    height: fit-content;
    border-bottom: #333 1px solid;
}
.search input {
    width: calc(100% - 60px);
    margin: 10px 20px 0 20px;
    border-radius: 50px;
    border: #CCC solid 1px;
    padding: 10px;
    margin-bottom: 10px;
}

.search {
    position: absolute;
    width: 30%;
}

.search input {
	background: transparent;
}

.list {
    padding: 10px;
    height: 80%;
    overflow: auto;
    padding-top: 70px;
}

.friend img, .me_top img {
    border-radius: 50px;
    width: 50px;
    margin-right: 10px;
}
.friend .name {
    font-size: 20px;
}
.friend .lastChat {
    font-size: 12px;
    color: #999;
}

.friend {
    padding: 5px;
    border-radius: 10px;
    background-color: #222;
    transition: all 0.3s;
    margin-bottom: 5px;
}
.friend:hover {
    background-color: #333;
}
	
    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .search {
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            background-color: rgba(34, 34, 34, 0.3);
        }
        .bottom_bar_chat {
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.05);
        }
        .top_bar_chat {
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.05);
        }
        .chat {
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            background-color: rgba(0, 0, 0, 0.2);
        }
        .files {
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            background-color: rgba(0, 0, 0, 0.1);
        }
    }


::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background-color: #222;
}
::-webkit-scrollbar-thumb {
  background: #444;
  border-radius:30px;
}
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
@media only screen and (min-width: 601px) {
	.chat {
		width: calc(70% - 100px) !important;
		height: calc(100vh - 140px) !important;
		margin:0 !important;
		float: right;
		overflow:scroll !important;
		padding:70px 50px 70px 50px;
	}
	.friends {
		width: 30% !important;
		height: 100vh;
		box-shadow: 10px 0px 10px #111;
		z-index:10;
		float: left;
	}
	.search {
		position: absolute;
		width: 30% !important;
	}
	.bottom_bar_chat {
		position:fixed !important;
		right:0px !important;
		bottom:0px;
		width:calc(70% - 40px) !important;
		padding:20px;
		transition:all 0.2s;
	}
	
	.top_bar_chat {
		position:fixed !important;
		right:0px !important;
		top:0px;
		width:calc(70% - 40px) !important;
		padding:0px 20px 0px 20px;
		transition:all 0.2s;
	}
	.back {
		display:none;
	}
}

@media only screen and (max-width: 600px) {
	.back {
		display:inline-block;
		margin-right:10px;
		font-size:20px;
		width:fit-content;
	}
	.chat {
		width: calc(100% - 20px);
		height:calc(100vh - 140px);
		padding:70px 10px 70px 10px;
		position:fixed !important;
		top:0 !important;
		right:-100%;
		z-index:999;
		overflow:scroll !important;
		transition:all 0.2s;
	}
	.message img {
		width:150px !important;
	}
	.message {
		max-width:80%;
	}
	.friends {
		width: 100%;
		height: calc(100vh - 40px);
		box-shadow: 10px 0px 10px #111;
		z-index:10;
	}
	.search {
		position: absolute;
		width: 100%;
	}
	.bottom_bar_chat {
		position:fixed;
		bottom:0px;
		width:calc(100% - 40px) !important;
		padding:20px;
		transition:all 0.2s;
	}
	
	.top_bar_chat {
		position:fixed;
		top:0px;
		width:calc(100% - 40px) !important;
		padding:0px 20px 0px 20px;
		transition:all 0.2s;
		font-size:20px;
	}
}
.top_bar_chat, .bottom_bar_chat {
	z-index:9999 !important;
}

.bottom_bar_chat {
	z-index:9;
	position:fixed;
	right:0px;
	bottom:0px;
	width:calc(70% - 40px);
	padding:20px;
}

.top_bar_chat {
	z-index:9;
	position:fixed;
	right:0px;
	top:0px;
	width:calc(70% - 40px);
	padding:0px 20px 0px 20px;
}

.type {
	height:30px;
	width:calc(100% - 110px);
	background: transparent;
	border:1px #333 solid;
	border-radius:50px;
	outline: none;
	padding: 5px;
	color:#FFF;
	margin-right:10px;
}

.top_bar_chat h4 {
	display:inline-block;
	width:calc(100% - 40px);
	margin-top:15px;
	margin-bottom:15px;
}
.buttons {
	display:inline-block;
}
i {
	color:#FFF;
	font-size:15px;
	margin-right:5px;
	cursor:pointer;
}
i .fa-paper-plane {
	font-size:30px !important;
	margin-left:20px !important;
}

.message_place_me {
	width:100%;
	height:fit-content;
	text-align:right !important;
}

.message_place_you {
	width:100%;
	height:fit-content;
	text-align:left;
}

.message {
	border-radius:20px;
	height: fit-content;
	width: fit-content;
	max-width:90%;
	border: none !important;
	padding:10px;
	margin: 10px;
	position:relative;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.me {
	background-color: #2a9d8f;
	float:right;
	margin:2px;
}
.you {
	background-color: #073b4c;
	margin:5px;
}
.message img {
	width:200px;
	border-radius:20px;
}

.files {
    position:absolute;
    left:30px;
    padding: 10px;
    border-radius:50px;
    transition:all 0.2s;
}

i {
	margin:10px;
	padding:0;
	background-color:transparent;
	transition:all 0.2s;
	border-radius:50px;
	font-size:20px;
}
i:hover {
	margin:0;
	padding:10px;
	background-color:rgba(0, 0, 0, 0.5);
}

</style>


<script>
function openChat(id) {
	document.getElementsByClassName('chat')[0].style.right = "0";
	document.getElementsByClassName('top_bar_chat')[0].style.right = "0";
	document.getElementsByClassName('bottom_bar_chat')[0].style.right = "0";
}
function closeChat(id) {
	document.getElementsByClassName('chat')[0].style.right = "-100%";
	document.getElementsByClassName('top_bar_chat')[0].style.right = "-100%";
	document.getElementsByClassName('bottom_bar_chat')[0].style.right = "-100%";
}
function openFiles() {
	document.getElementsByClassName('files')[0].style.bottom = "100px";
	document.getElementById('files_but').setAttribute("onClick", "closeFiles()");
}
function closeFiles() {
	document.getElementsByClassName('files')[0].style.bottom = "-200%";
	document.getElementById('files_but').setAttribute("onClick", "openFiles()");
}
function sendButton() {
	if (document.getElementById('message').value != "") {
		document.getElementById('send').style.display = "block";
		document.getElementById('mic').style.display = "none";
	} else {
		document.getElementById('send').style.display = "none";
		document.getElementById('mic').style.display = "block";
	}
}
</script>

<body>

<div class="friends">
    <div class="me_top">
        <img src="https://picsum.photos/200">
    </div>
    <div class="search"><input type="text" placeholder="Search"></div>
    <div class="list">
        <div class="friend" onClick="openChat('1')">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
        <div class="friend">
            <table><tr>
                <td><img src="https://picsum.photos/200"></td>
                <td><div class="name">Alex</div>
                <div class="lastChat">Ce mai faci</div></td>
            </tr></table>
        </div>
    </div>
</div>

<div class="top_bar_chat" style="right:-100%;">
    <h4><i class="fas fa-chevron-left back" onClick="closeChat()"></i> Alex</h4>
    <div class="buttons"><i class="fas fa-ellipsis-v"></i></div>
</div>

<div class="chat">
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you"><img src="https://picsum.photos/200"></div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me"><img src="https://picsum.photos/200"></div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you"><img src="https://picsum.photos/200"></div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me"><img src="https://picsum.photos/200"></div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you"><img src="https://picsum.photos/200"></div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_you"><div class="message you">Bla bla bla</div></div>
    <div class="message_place_me clearfix"><div class="message me"><img src="https://picsum.photos/200"></div></div>
</div>


<div class="bottom_bar_chat" style="right:-100%;">
    <div class="files" style="bottom: -200%;">
        <i class="fas fa-file"></i><br />
        <i class="fas fa-images"></i><br />
        <i class="fas fa-camera"></i>
    </div>
    <div class="buttons">
        <i class="fas fa-paperclip" id="files_but" onClick="openFiles()"></i>
    </div>
    <input class="type" id="message" placeholder="Message ..." onKeyUp="sendButton()">
    <div class="buttons">
        <i class="fas fa-microphone" id="mic"></i>
        <i class="fas fa-paper-plane" id="send" style="display:none;"></i>
    </div>
</div>

</body>
</html>