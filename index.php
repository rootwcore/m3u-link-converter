<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>M3U Link Converter</title>
<meta name="description" content="Paste your IPTV link and copy the format your IPTV app needs.">
<meta name="theme-color" content="#f4f8ff">
<link rel="icon" type="image/svg+xml" href='data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="%237667ff"/><stop offset="1" stop-color="%2337c7ff"/></linearGradient></defs><rect width="64" height="64" rx="18" fill="url(%23g)"/><path d="M17 18h9l6 12 6-12h9v28h-8V31l-5 10h-4l-5-10v15h-8z" fill="white"/></svg>'>
<style>
:root{--bg:#f4f8ff;--white:rgba(255,255,255,.72);--white2:rgba(255,255,255,.9);--border:rgba(91,116,168,.18);--border2:rgba(91,116,168,.32);--text:#14203a;--muted:#5b6680;--muted2:#8791a8;--primary:#7465ff;--blue:#37c7ff;--green:#16bf85;--red:#f06078;--shadow:0 18px 60px rgba(69,95,150,.14);--shadow2:0 28px 90px rgba(69,95,150,.20);--max:1180px}*{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;min-height:100vh;font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Arial,sans-serif;color:var(--text);background:radial-gradient(circle at 8% 4%,rgba(116,101,255,.18),transparent 30rem),radial-gradient(circle at 92% 10%,rgba(55,199,255,.22),transparent 28rem),linear-gradient(180deg,#fbfdff 0%,#eef5ff 100%)}button,input{font:inherit}a{text-decoration:none;color:inherit}.page{position:relative;overflow:hidden}.page:before{content:"";position:fixed;inset:0;pointer-events:none;background-image:linear-gradient(rgba(255,255,255,.7) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.7) 1px,transparent 1px);background-size:38px 38px;mask-image:linear-gradient(to bottom,rgba(0,0,0,.42),transparent 82%)}.blob{position:fixed;border-radius:999px;filter:blur(30px);opacity:.7;pointer-events:none}.blob.one{width:300px;height:300px;left:-120px;top:190px;background:rgba(116,101,255,.12)}.blob.two{width:260px;height:260px;right:-110px;top:310px;background:rgba(55,199,255,.15)}.container{position:relative;z-index:1;width:min(var(--max),calc(100% - 32px));margin:0 auto}.top{padding:22px 0}.nav{display:flex;align-items:center;justify-content:space-between;gap:18px;padding:14px 16px;border:1px solid var(--border);background:rgba(255,255,255,.58);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);border-radius:999px;box-shadow:var(--shadow)}.brand{display:flex;align-items:center;gap:13px;min-width:0}.logo{width:48px;height:48px;border-radius:18px;display:grid;place-items:center;background:linear-gradient(135deg,var(--primary),var(--blue));box-shadow:0 16px 34px rgba(76,119,230,.24)}.logo svg{width:30px;height:30px}.brand strong{display:block;font-size:18px;letter-spacing:-.03em}.brand span{display:block;margin-top:4px;color:var(--muted);font-size:12px;font-weight:650}.nav-links{display:flex;gap:8px;align-items:center}.nav-links a{padding:10px 14px;border-radius:999px;color:var(--muted);font-size:13px;font-weight:800}.nav-links a:hover{background:rgba(255,255,255,.8);color:var(--text)}.hero{padding:56px 0 28px}.hero-panel{position:relative;overflow:hidden;border:1px solid var(--border);border-radius:38px;background:linear-gradient(180deg,rgba(255,255,255,.78),rgba(255,255,255,.52));box-shadow:var(--shadow2);backdrop-filter:blur(26px);-webkit-backdrop-filter:blur(26px);padding:44px}.hero-panel:before{content:"";position:absolute;right:-120px;top:-130px;width:320px;height:320px;border-radius:50%;background:radial-gradient(circle,rgba(55,199,255,.24),transparent 68%)}.hero-panel:after{content:"";position:absolute;left:-120px;bottom:-150px;width:340px;height:340px;border-radius:50%;background:radial-gradient(circle,rgba(116,101,255,.18),transparent 68%)}.hero-grid{position:relative;z-index:1;display:grid;grid-template-columns:1.12fr .88fr;gap:28px;align-items:center}.pill{display:inline-flex;align-items:center;gap:9px;padding:10px 14px;border-radius:999px;border:1px solid rgba(22,191,133,.24);background:rgba(22,191,133,.08);color:#11835f;font-size:13px;font-weight:900}.dot{width:8px;height:8px;border-radius:50%;background:var(--green);box-shadow:0 0 0 6px rgba(22,191,133,.12)}h1{margin:18px 0 0;max-width:760px;font-size:clamp(42px,7vw,82px);line-height:.94;letter-spacing:-.078em}.grad{background:linear-gradient(135deg,#14203a 0%,#586db8 48%,#1bb8f1 100%);-webkit-background-clip:text;background-clip:text;color:transparent}.lead{margin:20px 0 0;max-width:660px;color:var(--muted);font-size:clamp(17px,2vw,20px);line-height:1.72}.side-stack{display:grid;gap:14px}.glass-card{border:1px solid var(--border);background:rgba(255,255,255,.62);backdrop-filter:blur(18px);-webkit-backdrop-filter:blur(18px);border-radius:26px;padding:20px;box-shadow:var(--shadow)}.glass-card h3{margin:0;font-size:18px;letter-spacing:-.03em}.glass-card p{margin:8px 0 0;color:var(--muted);font-size:14px;line-height:1.65}.chips{display:flex;flex-wrap:wrap;gap:8px;margin-top:14px}.chip{display:inline-flex;padding:8px 10px;border-radius:999px;border:1px solid rgba(116,101,255,.16);background:rgba(116,101,255,.08);color:#4d57a5;font-size:12px;font-weight:900}.section{padding:30px 0}.converter{border:1px solid var(--border);border-radius:32px;background:linear-gradient(180deg,rgba(255,255,255,.82),rgba(255,255,255,.58));box-shadow:var(--shadow2);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);padding:22px}.input-row{display:grid;grid-template-columns:1fr auto;gap:14px}.input{width:100%;min-width:0;border:1px solid var(--border);border-radius:20px;background:rgba(255,255,255,.86);color:var(--text);outline:none;padding:18px 20px;font-size:15px;box-shadow:inset 0 1px 0 rgba(255,255,255,.72)}.input:focus{border-color:rgba(55,199,255,.5);box-shadow:0 0 0 4px rgba(55,199,255,.12),inset 0 1px 0 rgba(255,255,255,.8)}.btn{border:0;border-radius:18px;cursor:pointer;padding:15px 18px;background:linear-gradient(135deg,var(--primary),var(--blue));color:white;font-weight:900;display:inline-flex;align-items:center;justify-content:center;gap:8px;box-shadow:0 14px 32px rgba(76,119,230,.22);transition:transform .18s ease,opacity .18s ease}.btn:hover{transform:translateY(-1px)}.btn:active{transform:translateY(0)}.btn-soft{background:rgba(255,255,255,.72);border:1px solid var(--border);box-shadow:none;color:var(--text)}.btn-small{padding:10px 13px;border-radius:14px;font-size:13px}.helper{margin-top:14px;display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap;color:var(--muted);font-size:13px;line-height:1.6}.actions{display:flex;gap:8px;flex-wrap:wrap}.msg{display:none;margin-top:16px;padding:15px 17px;border-radius:18px;font-size:14px;line-height:1.6}.msg.show{display:block}.msg.ok{border:1px solid rgba(22,191,133,.28);background:rgba(22,191,133,.09);color:#11835f}.msg.error{border:1px solid rgba(240,96,120,.28);background:rgba(240,96,120,.08);color:#b43b52}.title-row{display:flex;align-items:flex-end;justify-content:space-between;gap:18px;margin-bottom:18px}.title-row h2{margin:0;font-size:clamp(30px,4vw,45px);line-height:1.03;letter-spacing:-.06em}.title-row p{margin:8px 0 0;max-width:720px;color:var(--muted);line-height:1.7}.detected{display:none;width:100%;margin-bottom:18px;padding:16px;border:1px solid var(--border);border-radius:26px;background:rgba(255,255,255,.64);box-shadow:var(--shadow)}.detected.show{display:block}.detected-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:12px}.detected-item{min-width:0;padding:14px;border:1px solid var(--border);border-radius:18px;background:rgba(255,255,255,.74)}.detected-item span{display:block;margin-bottom:6px;color:var(--muted2);font-size:11px;font-weight:950;letter-spacing:.06em;text-transform:uppercase}.detected-item strong{display:block;font-size:13px;overflow-wrap:anywhere}.cards{width:100%;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}.empty{grid-column:1/-1;width:100%;padding:46px 22px;text-align:center;border:1px dashed var(--border2);border-radius:30px;background:rgba(255,255,255,.58);color:var(--muted);box-shadow:var(--shadow)}.empty strong{display:block;margin-bottom:8px;color:var(--text);font-size:20px}.card{min-width:0;padding:20px;border:1px solid var(--border);border-radius:30px;background:linear-gradient(180deg,rgba(255,255,255,.78),rgba(255,255,255,.58));box-shadow:var(--shadow)}.card.best{border-color:rgba(55,199,255,.34);background:linear-gradient(180deg,rgba(221,246,255,.92),rgba(255,255,255,.66))}.card-head{display:flex;align-items:flex-start;justify-content:space-between;gap:12px}.card h3{margin:0;font-size:19px;letter-spacing:-.032em}.card p{margin:8px 0 0;color:var(--muted);font-size:14px;line-height:1.65}.tag{flex:0 0 auto;padding:7px 10px;border-radius:999px;border:1px solid var(--border2);background:rgba(255,255,255,.74);color:#4f5f8d;font-size:11px;font-weight:950}.copybox{margin-top:14px;padding:14px;border:1px solid var(--border);border-radius:18px;background:rgba(248,251,255,.9);color:#26314c;font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono",monospace;font-size:12px;line-height:1.6;min-height:64px;overflow-wrap:anywhere;white-space:pre-wrap}.copy-row{margin-top:12px;display:flex;align-items:center;justify-content:space-between;gap:12px}.copied{opacity:0;color:var(--green);font-size:12px;font-weight:900;transition:opacity .2s ease}.copied.show{opacity:1}.guide{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}.guide-card{min-width:0;padding:20px;border:1px solid var(--border);border-radius:30px;background:linear-gradient(180deg,rgba(255,255,255,.75),rgba(255,255,255,.56));box-shadow:var(--shadow)}.guide-card h3{margin:0;font-size:18px;letter-spacing:-.03em}.guide-card p{margin:8px 0 0;color:var(--muted);font-size:14px;line-height:1.7}.footer{padding:28px 0 42px;color:var(--muted2);font-size:13px;text-align:center}.toast{position:fixed;right:18px;bottom:18px;z-index:30;padding:13px 15px;border-radius:16px;border:1px solid rgba(22,191,133,.26);background:rgba(255,255,255,.92);color:#11835f;box-shadow:var(--shadow2);opacity:0;transform:translateY(10px);transition:.22s ease;font-size:13px;font-weight:900;pointer-events:none}.toast.show{opacity:1;transform:translateY(0)}@media(max-width:960px){.hero-grid{grid-template-columns:1fr}.cards,.guide{grid-template-columns:1fr}.detected-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.nav-links{display:none}}@media(max-width:680px){.container{width:min(100% - 20px,var(--max))}.nav{border-radius:24px}.top{padding:14px 0}.hero{padding-top:26px}.hero-panel{padding:26px 18px;border-radius:28px}.converter,.card,.guide-card,.detected,.empty{border-radius:24px}.input-row{grid-template-columns:1fr}.btn{width:100%}.title-row,.copy-row{display:block}.copy-row .btn{margin-top:10px}.detected-grid{grid-template-columns:1fr}h1{letter-spacing:-.06em}}
</style>
</head>
<body>
<div class="page">
<div class="blob one"></div>
<div class="blob two"></div>
<header class="top">
<div class="container">
<nav class="nav">
<a class="brand" href="#top">
<div class="logo">
<svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 18h9l6 12 6-12h9v28h-8V31l-5 10h-4l-5-10v15h-8V18Z" fill="white"/></svg>
</div>
<div>
<strong>M3U Link Converter</strong>
<span>IPTV format helper</span>
</div>
</a>
<div class="nav-links">
<a href="#converter">Converter</a>
<a href="#results">Formats</a>
<a href="#guide">Help</a>
</div>
</nav>
</div>
</header>
<main id="top">
<section class="hero">
<div class="container">
<div class="hero-panel">
<div class="hero-grid">
<div>
<div class="pill"><span class="dot"></span>Easy for IPTV users</div>
<h1><span class="grad">Paste your IPTV link and copy the format your app needs.</span></h1>
<p class="lead">If your provider gave you one playlist link, this page converts it into the common formats used by IPTV apps. Choose the card that matches your app and copy it.</p>
</div>
<div class="side-stack">
<div class="glass-card">
<h3>Simple result cards</h3>
<p>No technical knowledge needed. You will see clear options such as Xtream Login, M3U Playlist and TV Guide URL.</p>
<div class="chips"><span class="chip">Xtream Login</span><span class="chip">M3U URL</span><span class="chip">TV Guide</span></div>
</div>
<div class="glass-card">
<h3>Privacy friendly</h3>
<p>Your link is converted in your browser. The page does not save or check your playlist.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="section" id="converter">
<div class="container">
<div class="converter">
<div class="input-row">
<input class="input" id="urlInput" type="text" autocomplete="off" spellcheck="false" placeholder="Paste your IPTV / M3U link here">
<button class="btn" id="convertBtn" type="button">Convert Link</button>
</div>
<div class="helper">
<span>Paste the link you received from your provider, then copy the format your IPTV app asks for.</span>
<div class="actions">
<button class="btn btn-soft btn-small" id="toggleSecretBtn" type="button">Hide password</button>
<button class="btn btn-soft btn-small" id="clearBtn" type="button">Clear</button>
</div>
</div>
<div class="msg" id="messageBox"></div>
</div>
</div>
</section>
<section class="section" id="results">
<div class="container">
<div class="title-row">
<div>
<h2>Your converted formats</h2>
<p>If your app asks for server, username and password, use Xtream Codes Login. If it asks for one playlist link, use one of the M3U options.</p>
</div>
</div>
<div class="detected" id="detectedBox"></div>
<div class="cards" id="resultCards">
<div class="empty">
<strong>No link converted yet</strong>
Paste your IPTV link above and click Convert Link.
</div>
</div>
</div>
</section>
<section class="section" id="guide">
<div class="container">
<div class="title-row">
<div>
<h2>Which one should I copy?</h2>
<p>Most users only need one of these simple options.</p>
</div>
</div>
<div class="guide">
<div class="guide-card">
<h3>Xtream Codes Login</h3>
<p>Use this when your IPTV app asks for Server URL, Username and Password. Many modern apps support this option.</p>
</div>
<div class="guide-card">
<h3>M3U Playlist URL</h3>
<p>Use this when your app asks for one playlist URL. It is common on smart TVs, TV boxes and mobile IPTV apps.</p>
</div>
<div class="guide-card">
<h3>EPG / TV Guide URL</h3>
<p>Use this only if your app has a separate field for the TV guide or EPG. Not every app requires it.</p>
</div>
<div class="guide-card">
<h3>MPEG-TS</h3>
<p>If you are not sure which playlist type to try first, MPEG-TS is usually a safe starting option.</p>
</div>
<div class="guide-card">
<h3>HLS / M3U8</h3>
<p>Use this if your device or player works better with HLS, or if the app specifically asks for M3U8.</p>
</div>
<div class="guide-card">
<h3>Important</h3>
<p>This page does not provide channels or subscriptions. It only reformats the IPTV link you already have.</p>
</div>
</div>
</div>
</section>
</main>
<footer class="footer">
<div class="container">M3U Link Converter</div>
</footer>
</div>
<div class="toast" id="toast">Copied to clipboard</div>
<script>
(function(){
"use strict";
const input=document.getElementById("urlInput");
const convertBtn=document.getElementById("convertBtn");
const clearBtn=document.getElementById("clearBtn");
const toggleSecretBtn=document.getElementById("toggleSecretBtn");
const messageBox=document.getElementById("messageBox");
const detectedBox=document.getElementById("detectedBox");
const resultCards=document.getElementById("resultCards");
const toast=document.getElementById("toast");
let showSecret=true;
let currentData=null;
function normalizeUrl(value){let url=String(value||"").trim();if(!url){return "";}url=url.replace(/\s+/g,"");if(url.startsWith("//")){url="http:"+url;}if(!/^https?:\/\//i.test(url)){url="http://"+url;}return url;}
function safeDecode(value){try{return decodeURIComponent(value);}catch(e){return value;}}
function getParam(params,names){for(const name of names){const value=params.get(name);if(value!==null&&value!==""){return value;}}return "";}
function normalizeOutput(value){value=String(value||"").toLowerCase().replace(".","");if(value==="hls"){return "m3u8";}if(value==="mpegts"){return "ts";}return value;}
function splitFile(file){const clean=String(file||"").split("?")[0].split("#")[0];const match=clean.match(/^(.+?)\.([a-z0-9]+)$/i);if(match){return {name:match[1],extension:match[2].toLowerCase()};}return {name:clean,extension:""};}
function parseUrl(value){const normalized=normalizeUrl(value);if(!normalized){return {ok:false,message:"Please paste your playlist link first."};}let url;try{url=new URL(normalized);}catch(e){return {ok:false,message:"This does not look like a valid link. Please check and paste the full URL."};}const params=url.searchParams;const path=safeDecode(url.pathname);const parts=path.split("/").filter(Boolean).map(safeDecode);const lowerParts=parts.map(part=>part.toLowerCase());const lowerPath=path.toLowerCase();const data={ok:true,url:normalized,server:url.protocol+"//"+url.host,username:getParam(params,["username","user","u","login"]),password:getParam(params,["password","pass","p"]),type:getParam(params,["type"])||"m3u_plus",output:normalizeOutput(getParam(params,["output"])),inputType:"Playlist link",streamId:"",canConvert:false,limited:false};if(lowerPath.includes("/get.php")||lowerPath.endsWith("get.php")){data.inputType="M3U playlist link";}if(lowerPath.includes("/player_api.php")||lowerPath.endsWith("player_api.php")){data.inputType="App login API link";}if(lowerPath.includes("/xmltv.php")||lowerPath.endsWith("xmltv.php")){data.inputType="TV guide / EPG link";}const playlistIndex=lowerParts.indexOf("playlist");if(playlistIndex!==-1&&parts.length>=playlistIndex+4){data.inputType="M3U playlist link";data.username=data.username||parts[playlistIndex+1];data.password=data.password||parts[playlistIndex+2];data.type=parts[playlistIndex+3]||data.type;}const streamIndex=lowerParts.findIndex(part=>["live","movie","series"].includes(part));if(streamIndex!==-1&&parts.length>=streamIndex+4){data.inputType="Direct stream link";data.username=data.username||parts[streamIndex+1];data.password=data.password||parts[streamIndex+2];const fileInfo=splitFile(parts[streamIndex+3]||"");data.streamId=fileInfo.name;if(!data.output){data.output=normalizeOutput(fileInfo.extension);}}if(lowerParts.includes("c")||lowerPath.includes("stalker_portal")||lowerPath.includes("/portal.php")||lowerPath.includes("/server/load.php")){data.inputType="Portal link";data.limited=true;}if((!data.username||!data.password)&&(lowerPath.endsWith(".m3u")||lowerPath.endsWith(".m3u8"))){data.inputType="Direct playlist file";data.limited=true;}if(!data.output){data.output="ts";}data.canConvert=Boolean(data.server&&data.username&&data.password);if(!data.canConvert&&!data.limited){data.limited=true;}return data;}
function encodePath(value){return encodeURIComponent(value).replace(/%2F/gi,"%252F");}
function buildCards(data){if(!data.ok){return [];}if(!data.canConvert){return [{title:"Original link",tag:"Detected",best:false,description:"This link was detected, but the username and password could not be found inside it.",value:data.url},{title:"Why conversion is limited",tag:"Missing login",best:false,description:"To create all common formats, the link needs account details or you need to know the server, username and password.",value:"Server URL: "+data.server+"\nUsername: required\nPassword: required"}];}const server=data.server;const username=data.username;const password=data.password;const u=encodeURIComponent(username);const p=encodeURIComponent(password);const pu=encodePath(username);const pp=encodePath(password);return [{title:"Xtream Codes Login",tag:"Best for many apps",best:true,description:"Copy these three fields if your app asks for Server URL, Username and Password.",value:"Server URL: "+server+"\nUsername: "+username+"\nPassword: "+password},{title:"M3U Plus - MPEG-TS",tag:"Playlist URL",best:true,description:"Use this when your app asks for one playlist link. This is usually the best starting option.",value:server+"/get.php?username="+u+"&password="+p+"&type=m3u_plus&output=ts"},{title:"M3U Plus - HLS / M3U8",tag:"Playlist URL",best:false,description:"Use this if your device or app prefers HLS or asks for M3U8.",value:server+"/get.php?username="+u+"&password="+p+"&type=m3u_plus&output=m3u8"},{title:"Basic M3U - MPEG-TS",tag:"Simple playlist",best:false,description:"A simpler playlist version for apps that do not need extra information such as logos or groups.",value:server+"/get.php?username="+u+"&password="+p+"&type=m3u&output=ts"},{title:"EPG / TV Guide URL",tag:"TV guide",best:false,description:"Use this only if your app has a separate field for TV guide or EPG data.",value:server+"/xmltv.php?username="+u+"&password="+p},{title:"Alternative Playlist Format",tag:"Some panels",best:false,description:"Some providers also use this playlist style.",value:server+"/playlist/"+pu+"/"+pp+"/m3u_plus"},{title:"Player API Link",tag:"Advanced",best:false,description:"Some apps and tools use this API style for account access.",value:server+"/player_api.php?username="+u+"&password="+p}];}
function escapeHtml(value){return String(value??"").replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\"/g,"&quot;").replace(/'/g,"&#039;");}
function escapeAttr(value){return escapeHtml(value).replace(/`/g,"&#096;");}
function mask(value,isPassword){value=String(value||"");if(showSecret){return value;}if(value==="Not found"){return value;}if(isPassword){return "••••••••";}if(value.length<=4){return "••••";}return value.slice(0,2)+"••••"+value.slice(-2);}
function hideSecretInText(text){let value=String(text||"");if(currentData&&currentData.password){value=value.split(currentData.password).join("••••••••");}value=value.replace(/(password=)([^&\s]+)/gi,"$1••••••••");value=value.replace(/(Password:\s*)(.+)/gi,"$1••••••••");return value;}
function renderDetected(data){if(!data.ok){detectedBox.classList.remove("show");detectedBox.innerHTML="";return;}const username=data.username||"Not found";const password=data.password?mask(data.password,true):"Not found";detectedBox.classList.add("show");detectedBox.innerHTML='<div class="detected-grid"><div class="detected-item"><span>Detected as</span><strong>'+escapeHtml(data.inputType)+'</strong></div><div class="detected-item"><span>Server</span><strong>'+escapeHtml(data.server)+'</strong></div><div class="detected-item"><span>Username</span><strong>'+escapeHtml(mask(username,false))+'</strong></div><div class="detected-item"><span>Password</span><strong>'+escapeHtml(password)+'</strong></div></div>';}
function renderCards(cards){if(!cards.length){resultCards.innerHTML='<div class="empty"><strong>No result</strong>Please paste a valid IPTV playlist link.</div>';return;}resultCards.innerHTML=cards.map((card,index)=>{const shownValue=showSecret?card.value:hideSecretInText(card.value);const css=card.best?"card best":"card";return '<article class="'+css+'"><div class="card-head"><div><h3>'+escapeHtml(card.title)+'</h3><p>'+escapeHtml(card.description)+'</p></div><span class="tag">'+escapeHtml(card.tag)+'</span></div><div class="copybox">'+escapeHtml(shownValue)+'</div><div class="copy-row"><span class="copied" id="copied'+index+'">Copied</span><button class="btn btn-soft btn-small copy-btn" type="button" data-index="'+index+'" data-copy="'+escapeAttr(card.value)+'">Copy</button></div></article>';}).join("");document.querySelectorAll(".copy-btn").forEach(button=>{button.addEventListener("click",async()=>{const value=button.getAttribute("data-copy")||"";const index=button.getAttribute("data-index");await copy(value);flashCopied(index);});});}
function setMessage(type,text){messageBox.className="msg";if(!text){messageBox.textContent="";return;}messageBox.classList.add("show");if(type){messageBox.classList.add(type);}messageBox.textContent=text;}
async function copy(value){try{if(navigator.clipboard&&window.isSecureContext){await navigator.clipboard.writeText(value);}else{fallbackCopy(value);}}catch(e){fallbackCopy(value);}showToast("Copied to clipboard");}
function fallbackCopy(value){const textarea=document.createElement("textarea");textarea.value=value;textarea.setAttribute("readonly","readonly");textarea.style.position="fixed";textarea.style.left="-9999px";document.body.appendChild(textarea);textarea.select();document.execCommand("copy");document.body.removeChild(textarea);}
function flashCopied(index){const el=document.getElementById("copied"+index);if(!el){return;}el.classList.add("show");setTimeout(()=>{el.classList.remove("show");},1200);}
function showToast(text){toast.textContent=text;toast.classList.add("show");setTimeout(()=>{toast.classList.remove("show");},1500);}
function convert(){const data=parseUrl(input.value);currentData=data;if(!data.ok){setMessage("error",data.message);renderDetected(data);renderCards([]);return;}if(data.canConvert){setMessage("ok","Link converted. Choose the format that matches your app and copy it.");}else{setMessage("error","This link was detected, but it does not contain enough information to create all formats.");}renderDetected(data);renderCards(buildCards(data));}
convertBtn.addEventListener("click",convert);
input.addEventListener("keydown",event=>{if(event.key==="Enter"){convert();}});
clearBtn.addEventListener("click",()=>{input.value="";currentData=null;setMessage("","");detectedBox.classList.remove("show");detectedBox.innerHTML="";resultCards.innerHTML='<div class="empty"><strong>No link converted yet</strong>Paste your IPTV link above and click Convert Link.</div>';});
toggleSecretBtn.addEventListener("click",()=>{showSecret=!showSecret;toggleSecretBtn.textContent=showSecret?"Hide password":"Show password";if(currentData){renderDetected(currentData);renderCards(buildCards(currentData));}});
})();
</script>
</body>
</html>