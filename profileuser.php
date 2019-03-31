<?php
include 'backend/functions.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>profile page</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <style>
        
body{margin-top:20px;
    overflow-x:hidden;}

.abc{
    text-align: center;
    margin-top:40px;
}

.bcd{
    text-align: center;
    margin-top:40px;
    margin-bottom: 20px;
}

.align-center, .center {
    text-align: center!important;
}

.profile-user-info {
    display: table;
    width: 98%;
    width: calc(100% - 24px);
    margin: 0 auto
}

.profile-info-row {
    display: table-row
}

.profile-info-name,
.profile-info-value {
    display: table-cell;
    border-top: 1px dotted #D5E4F1
}

.profile-info-name {
    text-align: right;
    padding: 6px 10px 6px 4px;
    font-weight: 400;
    color: #667E99;
    background-color: transparent;
    width: 110px;
    vertical-align: middle
}

.profile-info-value {
    padding: 6px 4px 6px 6px
}

.profile-info-value>span+span:before {
    display: inline;
    content: ",";
    margin-left: 1px;
    margin-right: 3px;
    color: #666;
    border-bottom: 1px solid #FFF
}

.profile-info-value>span+span.editable-container:before {
    display: none
}

.profile-info-row:first-child .profile-info-name,
.profile-info-row:first-child .profile-info-value {
    border-top: none
}

.profile-user-info-striped {
    border: 1px solid #DCEBF7
}

.profile-user-info-striped .profile-info-name {
    color: #336199;
    background-color: #EDF3F4;
    border-top: 1px solid #F7FBFF
}

.profile-user-info-striped .profile-info-value {
    border-top: 1px dotted #DCEBF7;
    padding-left: 12px
}

.profile-picture {
    border: 1px solid #CCC;
    background-color: #FFF;
    padding: 4px;
    display: inline-block;
    max-width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, .15)
}

.dd-empty,
.dd-handle,
.dd-placeholder,
.dd2-content {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box
}

.profile-activity {
    padding: 10px 4px;
    border-bottom: 1px dotted #D0D8E0;
    position: relative;
    border-left: 1px dotted #FFF;
    border-right: 1px dotted #FFF
}

.profile-activity:first-child {
    border-top: 1px dotted transparent
}

.profile-activity:first-child:hover {
    border-top-color: #D0D8E0
}

.profile-activity:hover {
    background-color: #F4F9FD;
    border-left: 1px dotted #D0D8E0;
    border-right: 1px dotted #D0D8E0
}

.profile-activity img {
    border: 2px solid #C9D6E5;
    border-radius: 100%;
    max-width: 40px;
    margin-right: 10px;
    margin-left: 0;
    box-shadow: none
}

.profile-activity .thumbicon {
    background-color: #74ABD7;
    display: inline-block;
    border-radius: 100%;
    width: 38px;
    height: 38px;
    color: #FFF;
    font-size: 18px;
    text-align: center;
    line-height: 38px;
    margin-right: 10px;
    margin-left: 0;
    text-shadow: none!important
}

.profile-activity .time {
    display: block;
    margin-top: 4px;
    color: #777
}

.profile-activity a.user {
    font-weight: 700;
    color: #9585BF
}

.profile-activity .tools {
    position: absolute;
    right: 12px;
    bottom: 8px;
    display: none
}

.profile-activity:hover .tools {
    display: block
}

.user-profile .ace-thumbnails li {
    border: 1px solid #CCC;
    padding: 3px;
    margin: 6px
}

.user-profile .ace-thumbnails li .tools {
    left: 3px;
    right: 3px
}

.user-profile .ace-thumbnails li:hover .tools {
    bottom: 3px
}

.user-title-label:hover {
    text-decoration: none
}

.user-title-label+.dropdown-menu {
    margin-left: -12px
}

.profile-contact-links {
    padding: 4px 2px 5px;
    border: 1px solid #E0E2E5;
    background-color: #F8FAFC
}

.btn-link:hover .ace-icon {
    text-decoration: none!important
}

.profile-social-links>a:hover>.ace-icon,
.profile-users .memberdiv .name a:hover .ace-icon,
.profile-users .memberdiv .tools>a:hover {
    text-decoration: none
}

.profile-social-links>a {
    text-decoration: none;
    margin: 0 1px
}

.profile-skills .progress {
    height: 26px;
    margin-bottom: 2px;
    background-color: transparent
}

.profile-skills .progress .progress-bar {
    line-height: 26px;
    font-size: 13px;
    font-weight: 700;
    font-family: "Open Sans";
    padding: 0 8px
}

.profile-users .user {
    display: block;
    position: static;
    text-align: center;
    width: auto
}

.profile-users .user img {
    padding: 2px;
    border-radius: 100%;
    border: 1px solid #AAA;
    max-width: none;
    width: 64px;
    -webkit-transition: all .1s;
    -o-transition: all .1s;
    transition: all .1s
}

.profile-users .user img:hover {
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33);
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33)
}

.profile-users .memberdiv {
    background-color: #FFF;
    width: 100px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: none;
    text-align: center;
    margin: 0 8px 24px
}

.profile-users .memberdiv .body {
    display: inline-block;
    margin: 8px 0 0
}

.profile-users .memberdiv .popover {
    visibility: hidden;
    min-width: 0;
    max-height: 0;
    max-width: 0;
    margin-left: 0;
    margin-right: 0;
    top: -5%;
    left: auto;
    right: auto;
    opacity: 0;
    display: none;
    position: absolute;
    -webkit-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
    -o-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
    transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s
}

.profile-users .memberdiv .popover.right {
    left: 100%;
    right: auto;
    display: block
}

.profile-users .memberdiv .popover.left {
    left: auto;
    right: 100%;
    display: block
}

.profile-users .memberdiv>:first-child:hover .popover {
    visibility: visible;
    opacity: 1;
    z-index: 1060;
    max-height: 250px;
    max-width: 250px;
    min-width: 150px;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s
}

.profile-users .memberdiv .tools {
    position: static;
    display: block;
    width: 100%;
    margin-top: 2px
}

.profile-users .memberdiv .tools>a {
    margin: 0 2px
}

.user-status {
    display: inline-block;
    width: 11px;
    height: 11px;
    background-color: #FFF;
    border: 3px solid #AAA;
    border-radius: 100%;
    vertical-align: middle;
    margin-right: 1px
}

.user-status.status-online {
    border-color: #8AC16C
}

.user-status.status-busy {
    border-color: #E07F69
}

.user-status.status-idle {
    border-color: #FFB752
}

.tab-content.profile-edit-tab-content {
    border: 1px solid #DDD;
    padding: 8px 32px 32px;
    -webkit-box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .2);
    box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .2);
    background-color: #FFF
}

@media only screen and (max-width:480px) {
    .profile-info-name {
        width: 80px
    }
    .profile-user-info-striped .profile-info-name {
        float: none;
        width: auto;
        text-align: left;
        padding: 6px 4px 6px 10px;
        display: block
    }
    .profile-user-info-striped .profile-info-value {
        margin-left: 10px;
        display: block
    }
    .user-profile .memberdiv {
        width: 50%;
        margin-left: 0;
        margin-right: 0
    }
}



.itemdiv {
    padding-right: 3px;
    min-height: 66px
}

.itemdiv>.user {
    display: inline-block;
    width: 42px;
    position: absolute;
    left: 0
}

.itemdiv>.user>.img,
.itemdiv>.user>img {
    border-radius: 100%;
    border: 2px solid #5293C4;
    max-width: 40px;
    position: relative
}

.itemdiv>.user>.img {
    padding: 2px
}

.itemdiv>.body {
    width: auto;
    margin-left: 50px;
    margin-right: 12px;
    position: relative
}

.itemdiv>.body>.time {
    display: block;
    font-size: 11px;
    font-weight: 700;
    color: #666;
    position: absolute;
    right: 9px;
    top: 0
}

.itemdiv>.body>.time .ace-icon {
    font-size: 14px;
    font-weight: 400
}

.itemdiv>.body>.name {
    display: block;
    color: #999
}

.itemdiv>.body>.name>b {
    color: #777
}

.itemdiv>.body>.text {
    display: block;
    position: relative;
    margin-top: 2px;
    padding-bottom: 19px;
    padding-left: 7px;
    font-size: 13px
}

.itemdiv.dialogdiv:before,
.itemdiv.dialogdiv>.body:before,
.itemdiv>.body>.text:after {
    content: "";
    position: absolute
}

.itemdiv>.body>.text:after {
    display: block;
    height: 1px;
    font-size: 0;
    overflow: hidden;
    left: 16px;
    right: -12px;
    margin-top: 9px;
    border-top: 1px solid #E4ECF3
}

.itemdiv>.body>.text>.ace-icon:first-child {
    color: #DCE3ED;
    margin-right: 4px
}

.itemdiv:last-child>.body>.text {
    border-bottom-width: 0
}

.itemdiv:last-child>.body>.text:after {
    display: none
}

.itemdiv.dialogdiv {
    padding-bottom: 14px
}

.itemdiv.dialogdiv:before {
    display: block;
    top: 0;
    bottom: 0;
    left: 19px;
    width: 3px;
    max-width: 3px;
    background-color: #E1E6ED;
    border: 1px solid #D7DBDD;
    border-width: 0 1px
}

.itemdiv.dialogdiv:last-child {
    padding-bottom: 0
}

.itemdiv.dialogdiv:last-child:before {
    display: none
}

.itemdiv.dialogdiv>.user>img {
    border-color: #C9D6E5
}

.itemdiv.dialogdiv>.body {
    border: 1px solid #DDE4ED;
    padding: 5px 8px 8px;
    border-left-width: 2px;
    margin-right: 1px
}

.itemdiv.dialogdiv>.body:before {
    display: block;
    left: -7px;
    top: 11px;
    width: 8px;
    height: 8px;
    border: 2px solid #DDE4ED;
    border-width: 2px 0 0 2px;
    background-color: #FFF;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg)
}

.itemdiv.dialogdiv>.body>.time {
    position: static;
    float: right
}

.itemdiv.dialogdiv>.body>.text {
    padding-left: 0;
    padding-bottom: 0
}

.itemdiv.dialogdiv>.body>.text:after {
    display: none
}

.itemdiv.dialogdiv .tooltip-inner {
    word-break: break-all
}

.itemdiv.memberdiv {
    width: 175px;
    padding: 2px;
    margin: 3px 0;
    float: left;
    border-bottom: 1px solid #E8E8E8
}

@media (min-width:992px) {
    .itemdiv.memberdiv {
        max-width: 50%
    }
}

@media (max-width:991px) {
    .itemdiv.memberdiv {
        min-width: 33.333%
    }
}

.itemdiv.memberdiv>.user>img {
    border-color: #DCE3ED
}

.itemdiv.memberdiv>.body>.time {
    position: static
}

.itemdiv.memberdiv>.body>.name {
    line-height: 18px;
    height: 18px;
    margin-bottom: 0
}

.itemdiv.memberdiv>.body>.name>a {
    display: inline-block;
    max-width: 100px;
    max-height: 18px;
    overflow: hidden;
    text-overflow: ellipsis;
    word-break: break-all
}

.itemdiv .tools {
    position: absolute;
    right: 5px;
    bottom: 10px;
    display: none
}

.item-list>li>.checkbox,
.item-list>li>label.inline,
.itemdiv:hover .tools {
    display: inline-block
}

.itemdiv .tools .btn {
    border-radius: 36px;
    margin: 1px 0
}

.itemdiv .body .tools {
    bottom: 4px
}

.itemdiv.commentdiv .tools {
    right: 9px
}

.item-list {
    margin: 0;
    padding: 0;
    list-style: none
}

.item-list>li {
    padding: 9px;
    background-color: #FFF;
    margin-top: -1px;
    position: relative
}

.item-list>li.selected {
    color: #8090A0;
    background-color: #F4F9FC
}

.item-list>li.selected .lbl,
.item-list>li.selected label {
    text-decoration: line-through;
    color: #8090A0
}

.item-list>li label {
    font-size: 13px
}

.item-list>li .percentage {
    font-size: 11px;
    font-weight: 700;
    color: #777
}


.ace-thumbnails>li,
.ace-thumbnails>li>:first-child {
    display: block;
    position: relative
}

.ace-thumbnails {
    list-style: none;
    margin: 0;
    padding: 0
}

.ace-thumbnails>li {
    float: left;
    overflow: hidden;
    margin: 2px;
    border: 2px solid #333
}

.ace-thumbnails>li>:first-child:focus {
    outline: 0
}

.ace-thumbnails>li .tags {
    display: inline-block;
    position: absolute;
    bottom: 0;
    right: 0;
    overflow: visible;
    direction: rtl;
    padding: 0;
    margin: 0;
    height: auto;
    width: auto;
    background-color: transparent;
    border-width: 0;
    vertical-align: inherit
}

.ace-thumbnails>li .tags>.label-holder {
    opacity: .92;
    filter: alpha(opacity=92);
    display: table;
    margin: 1px 0 0;
    direction: ltr;
    text-align: left
}

.ace-thumbnails>li>.tools,
.ace-thumbnails>li>:first-child>.text {
    position: absolute;
    text-align: center;
    background-color: rgba(0, 0, 0, .55)
}

.ace-thumbnails>li .tags>.label-holder:hover {
    opacity: 1;
    filter: alpha(opacity=100)
}

.ace-thumbnails>li>.tools {
    top: 0;
    bottom: 0;
    left: -30px;
    width: 24px;
    vertical-align: middle;
    -webkit-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease
}

.ace-thumbnails>li>.tools.tools-right {
    left: auto;
    right: -30px
}

.ace-thumbnails>li>.tools.tools-bottom {
    width: auto;
    height: 28px;
    left: 0;
    right: 0;
    top: auto;
    bottom: -30px
}

.ace-thumbnails>li>.tools.tools-top {
    width: auto;
    height: 28px;
    left: 0;
    right: 0;
    top: -30px;
    bottom: auto
}

.ace-thumbnails>li:hover>.tools {
    left: 0;
    right: 0
}

.ace-thumbnails>li:hover>.tools.tools-bottom {
    top: auto;
    bottom: 0
}

.ace-thumbnails>li:hover>.tools.tools-top {
    bottom: auto;
    top: 0
}

.ace-thumbnails>li:hover>.tools.tools-right {
    left: auto;
    right: 0
}

.ace-thumbnails>li>.in.tools {
    left: 0;
    right: 0
}

.ace-thumbnails>li>.in.tools.tools-bottom {
    top: auto;
    bottom: 0
}

.ace-thumbnails>li>.in.tools.tools-top {
    bottom: auto;
    top: 0
}

.ace-thumbnails>li>.in.tools.tools-right {
    left: auto;
    right: 0
}

.ace-thumbnails>li>.tools>a,
.ace-thumbnails>li>:first-child .inner a {
    display: inline-block;
    color: #FFF;
    font-size: 18px;
    font-weight: 400;
    padding: 0 4px
}

.ace-thumbnails>li>.tools>a:hover,
.ace-thumbnails>li>:first-child .inner a:hover {
    text-decoration: none;
    color: #C9E2EA
}

.ace-thumbnails>li .tools.tools-bottom>a,
.ace-thumbnails>li .tools.tools-top>a {
    display: inline-block
}

.ace-thumbnails>li>:first-child>.text {
    right: 0;
    left: 0;
    bottom: 0;
    top: 0;
    color: #FFF;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease
}

.dialogs,
.itemdiv {
    position: relative
}

.ace-thumbnails>li>:first-child>.text:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
    margin-right: 0
}

.ace-thumbnails>li>:first-child>.text>.inner {
    padding: 4px 0;
    margin: 0;
    display: inline-block;
    vertical-align: middle;
    max-width: 90%
}

.ace-thumbnails>li:hover>:first-child>.text {
    opacity: 1;
    filter: alpha(opacity=100)
}

@media only screen and (max-width:480px) {
    .ace-thumbnails {
        text-align: center
    }
    .ace-thumbnails>li {
        float: none;
        display: inline-block
    }
}


.tab-content {
    border: 1px solid #C5D0DC;
    padding: 16px 12px;
    position: relative
}

.tab-content.no-padding {
    padding: 0
}

.tab-content.no-border {
    border: none;
    padding: 12px
}

.tab-content.padding-32 {
    padding: 32px 24px
}

.tab-content.no-border.padding-32 {
    padding: 32px
}

.tab-content.padding-30 {
    padding: 30px 23px
}

.tab-content.no-border.padding-30 {
    padding: 30px
}

.tab-content.padding-28 {
    padding: 28px 21px
}

.tab-content.no-border.padding-28 {
    padding: 28px
}

.tab-content.padding-26 {
    padding: 26px 20px
}

.tab-content.no-border.padding-26 {
    padding: 26px
}

.tab-content.padding-24 {
    padding: 24px 18px
}

.tab-content.no-border.padding-24 {
    padding: 24px
}

.tab-content.padding-22 {
    padding: 22px 17px
}

.tab-content.no-border.padding-22 {
    padding: 22px
}

.tab-content.padding-20 {
    padding: 20px 15px
}

.tab-content.no-border.padding-20 {
    padding: 20px
}

.tab-content.padding-18 {
    padding: 18px 14px
}

.tab-content.no-border.padding-18 {
    padding: 18px
}

.tab-content.padding-16 {
    padding: 16px 12px
}

.tab-content.no-border.padding-16 {
    padding: 16px
}

.tab-content.padding-14 {
    padding: 14px 11px
}

.tab-content.no-border.padding-14 {
    padding: 14px
}

.tab-content.padding-12 {
    padding: 12px 9px
}

.tab-content.no-border.padding-12 {
    padding: 12px
}

.tab-content.padding-10 {
    padding: 10px 8px
}

.tab-content.no-border.padding-10 {
    padding: 10px
}

.tab-content.padding-8 {
    padding: 8px 6px
}

.tab-content.no-border.padding-8 {
    padding: 8px
}

.tab-content.padding-6 {
    padding: 6px 5px
}

.tab-content.no-border.padding-6 {
    padding: 6px
}

.tab-content.padding-4 {
    padding: 4px 3px
}

.tab-content.no-border.padding-4 {
    padding: 4px
}

.tab-content.no-border.padding-2,
.tab-content.padding-2 {
    padding: 2px
}

.tab-content.no-border.padding-0,
.tab-content.padding-0 {
    padding: 0
}


.nav.nav-tabs.padding-28 {
    padding-left: 28px
}

.tabs-left>.nav.nav-tabs.padding-28,
.tabs-right>.nav.nav-tabs.padding-28 {
    padding-left: 0;
    padding-top: 28px
}

.nav.nav-tabs.padding-26 {
    padding-left: 26px
}

.tabs-left>.nav.nav-tabs.padding-26,
.tabs-right>.nav.nav-tabs.padding-26 {
    padding-left: 0;
    padding-top: 26px
}

.nav.nav-tabs.padding-24 {
    padding-left: 24px
}

.tabs-left>.nav.nav-tabs.padding-24,
.tabs-right>.nav.nav-tabs.padding-24 {
    padding-left: 0;
    padding-top: 24px
}

.nav.nav-tabs.padding-22 {
    padding-left: 22px
}

.tabs-left>.nav.nav-tabs.padding-22,
.tabs-right>.nav.nav-tabs.padding-22 {
    padding-left: 0;
    padding-top: 22px
}

.nav.nav-tabs.padding-20 {
    padding-left: 20px
}

.tabs-left>.nav.nav-tabs.padding-20,
.tabs-right>.nav.nav-tabs.padding-20 {
    padding-left: 0;
    padding-top: 20px
}

.nav.nav-tabs.padding-18 {
    padding-left: 18px
}

.tabs-left>.nav.nav-tabs.padding-18,
.tabs-right>.nav.nav-tabs.padding-18 {
    padding-left: 0;
    padding-top: 18px
}

.nav.nav-tabs.padding-16 {
    padding-left: 16px
}

.tabs-left>.nav.nav-tabs.padding-16,
.tabs-right>.nav.nav-tabs.padding-16 {
    padding-left: 0;
    padding-top: 16px
}

.nav.nav-tabs.padding-14 {
    padding-left: 14px
}

.tabs-left>.nav.nav-tabs.padding-14,
.tabs-right>.nav.nav-tabs.padding-14 {
    padding-left: 0;
    padding-top: 14px
}

.nav.nav-tabs.padding-12 {
    padding-left: 12px
}

.tabs-left>.nav.nav-tabs.padding-12,
.tabs-right>.nav.nav-tabs.padding-12 {
    padding-left: 0;
    padding-top: 12px
}

.nav.nav-tabs.padding-10 {
    padding-left: 10px
}

.tabs-left>.nav.nav-tabs.padding-10,
.tabs-right>.nav.nav-tabs.padding-10 {
    padding-left: 0;
    padding-top: 10px
}

.nav.nav-tabs.padding-8 {
    padding-left: 8px
}

.tabs-left>.nav.nav-tabs.padding-8,
.tabs-right>.nav.nav-tabs.padding-8 {
    padding-left: 0;
    padding-top: 8px
}

.nav.nav-tabs.padding-6 {
    padding-left: 6px
}

.tabs-left>.nav.nav-tabs.padding-6,
.tabs-right>.nav.nav-tabs.padding-6 {
    padding-left: 0;
    padding-top: 6px
}

.nav.nav-tabs.padding-4 {
    padding-left: 4px
}

.tabs-left>.nav.nav-tabs.padding-4,
.tabs-right>.nav.nav-tabs.padding-4 {
    padding-left: 0;
    padding-top: 4px
}

.nav.nav-tabs.padding-2 {
    padding-left: 2px
}

.tabs-left>.nav.nav-tabs.padding-2,
.tabs-right>.nav.nav-tabs.padding-2 {
    padding-left: 0;
    padding-top: 2px
}

.nav-tabs {
    border-color: #C5D0DC;
    margin-bottom: 0!important;
    position: relative;
    top: 1px
}

.nav-tabs>li>a {
    padding: 7px 12px 8px
}

.nav-tabs>li>a,
.nav-tabs>li>a:focus {
    border-radius: 0!important;
    border-color: #C5D0DC;
    background-color: #F9F9F9;
    color: #999;
    margin-right: -1px;
    line-height: 18px;
    position: relative
}

.nav-tabs>li>a:hover {
    background-color: #FFF;
    color: #4C8FBD;
    border-color: #C5D0DC
}

.nav-tabs>li>a:active,
.nav-tabs>li>a:focus {
    outline: 0!important
}

.nav-tabs>li.active>a,
.nav-tabs>li.active>a:focus,
.nav-tabs>li.active>a:hover {
    color: #576373;
    border-color: #C5D0DC #C5D0DC transparent;
    border-top: 2px solid #4C8FBD;
    background-color: #FFF;
    z-index: 1;
    line-height: 18px;
    margin-top: -1px;
    box-shadow: 0 -2px 3px 0 rgba(0, 0, 0, .15)
}

.tabs-below>.nav-tabs {
    top: auto;
    margin-bottom: 0;
    margin-top: -1px;
    border-color: #C5D0DC;
    border-bottom-width: 0
}

.tabs-below>.nav-tabs>li>a,
.tabs-below>.nav-tabs>li>a:focus,
.tabs-below>.nav-tabs>li>a:hover {
    border-color: #C5D0DC
}

.tabs-below>.nav-tabs>li.active>a,
.tabs-below>.nav-tabs>li.active>a:focus,
.tabs-below>.nav-tabs>li.active>a:hover {
    border-color: transparent #C5D0DC #C5D0DC;
    border-top-width: 1px;
    border-bottom: 2px solid #4C8FBD;
    margin-top: 0;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .15)
}

.tabs-left>.nav-tabs>li>a,
.tabs-right>.nav-tabs>li>a {
    min-width: 60px
}

.tabs-left>.nav-tabs {
    top: auto;
    margin-bottom: 0;
    border-color: #C5D0DC;
    float: left
}

.tabs-left>.nav-tabs>li {
    float: none!important
}

.tabs-left>.nav-tabs>li>a,
.tabs-left>.nav-tabs>li>a:focus,
.tabs-left>.nav-tabs>li>a:hover {
    border-color: #C5D0DC;
    margin: 0 -1px 0 0
}

.tabs-left>.nav-tabs>li.active>a,
.tabs-left>.nav-tabs>li.active>a:focus,
.tabs-left>.nav-tabs>li.active>a:hover {
    border-color: #C5D0DC transparent #C5D0DC #C5D0DC;
    border-top-width: 1px;
    border-left: 2px solid #4C8FBD;
    margin: 0 -1px;
    -webkit-box-shadow: -2px 0 3px 0 rgba(0, 0, 0, .15)!important;
    box-shadow: -2px 0 3px 0 rgba(0, 0, 0, .15)!important
}

.tabs-right>.nav-tabs {
    top: auto;
    margin-bottom: 0;
    border-color: #C5D0DC;
    float: right
}

.tabs-right>.nav-tabs>li {
    float: none!important
}

.tabs-right>.nav-tabs>li>a,
.tabs-right>.nav-tabs>li>a:focus,
.tabs-right>.nav-tabs>li>a:hover {
    border-color: #C5D0DC;
    margin: 0 -1px
}

.tabs-right>.nav-tabs>li.active>a,
.tabs-right>.nav-tabs>li.active>a:focus,
.tabs-right>.nav-tabs>li.active>a:hover {
    border-color: #C5D0DC #C5D0DC #C5D0DC transparent;
    border-top-width: 1px;
    border-right: 2px solid #4C8FBD;
    margin: 0 -2px 0 -1px;
    -webkit-box-shadow: 2px 0 3px 0 rgba(0, 0, 0, .15);
    box-shadow: 2px 0 3px 0 rgba(0, 0, 0, .15)
}

.nav-tabs>li>a .badge {
    padding: 1px 5px;
    line-height: 15px;
    opacity: .75;
    vertical-align: initial
}

.nav-tabs>li>a .ace-icon {
    opacity: .75
}

.nav-tabs>li.active>a .ace-icon,
.nav-tabs>li.active>a .badge {
    opacity: 1
}

.nav-tabs li .ace-icon {
    width: 1.25em;
    display: inline-block;
    text-align: center
}

.nav-tabs>li.open .dropdown-toggle {
    background-color: #4F99C6;
    border-color: #4F99C6;
    color: #FFF
}

.nav-tabs>li.open .dropdown-toggle>.ace-icon {
    color: #FFF!important
}

.tabs-left .tab-content,
.tabs-right .tab-content {
    overflow: auto
}

.dark {
    color: #333!important
}

.white {
    color: #FFF!important
}

.red {
    color: #DD5A43!important
}

.red2 {
    color: #E08374!important
}

.light-red {
    color: #F77!important
}

.blue {
    color: #478FCA!important
}

.light-blue {
    color: #93CBF9!important
}

.green {
    color: #69AA46!important
}

.light-green {
    color: #B0D877!important
}

.orange {
    color: #FF892A!important
}

.orange2 {
    color: #FEB902!important
}

.light-orange {
    color: #FCAC6F!important
}

.purple {
    color: #A069C3!important
}

.pink {
    color: #C6699F!important
}

.pink2 {
    color: #D6487E!important
}

.brown {
    color: brown!important
}

.grey {
    color: #777!important
}

.buttons{
    margin-top: 40px;
    margin-bottom: 40px;
}
    </style>
   
  </head>
  <body>
    <div id="user-profile-2" class="user-profile">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-18">
				<li class="active">
					<a data-toggle="tab" href="#home">
						<i class="green ace-icon fa fa-user bigger-120"></i>
						Profile
					</a>
				</li>

				<li>
					<a data-toggle="tab" href="#feed">
						<i class="orange ace-icon fa fa-rss bigger-120"></i>
						Body Analysis
					</a>
				</li>

				<li>
					<a data-toggle="tab" href="#friends">
						<i class="blue ace-icon fa fa-users bigger-120" ></i>
						Manage Records
					</a>
				</li>

            </ul>
          

			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
					<div class="row">
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
								<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAAAM1BMVEUKME7///+El6bw8vQZPVlHZHpmfpHCy9Ojsbzg5ekpSmTR2N44V29XcYayvsd2i5yTpLFbvRYnAAAJcklEQVR4nO2d17arOgxFs+kkofz/154Qmg0uKsuQccddT/vhnOCJLclFMo+//4gedzcApf9B4srrusk+GsqPpj+ypq7zVE9LAdLWWVU+Hx69y2FMwAMGyfusLHwIpooyw9IAQfK+8naDp3OGHvZ0FMhrfPMgVnVjC2kABOQ1MLvi0DEIFj1ILu0LU2WjNRgtSF3pKb4qqtd9IHmjGlJHlc09IHlGcrQcPeUjTAySAGNSkQlRhCCJMGaUC0HSYUx6SmxFAtJDTdylsr4ApC1TY0yquKbCBkk7qnYVzPHFBHkBojhVJWviwgPJrsP4qBgTgbQXdsesjm4pDJDmIuswVZDdFx0ENTtkihoeqSDXD6tVxOFFBHndMKxWvUnzexpIcx/Gg2goJJDhVo6PCMGRAnKTmZuKm3wcJO/upphUqUHy29yVrRhJDORXOKIkEZDf4YiRhEF+iSNCEgb5KY4wSRDkB/yurUEG8nMcocgYABnvbrVL3nMIP0h/d5udKnwzSC/InfPdkJ6eWb0PJE++dyVVyQP5iQmWW27X5QG5druEKafBu0Hqu9saVOHa8HKC/K6BzHKZiRMEZCDF0Nd1/ZfXI/fcOibHOssFgokg9uFA20BhztHEAZIjIohrD/o1wljeFBDEwBo8YUt5Ir/rNLjOIACPFdy/AbEcPdcJBOCxytjeYAM4Kzp6rhOIPhRGNzwmFP3rOoTFI0irtnQKx6fj1Zt+h9njEUS9mKJxfFRrX5lt7wcQtaWTOfTHeIXVJQcQrRW+OYex2j0a66XZINoO8a7fPH2iHF2mC7ZBtB3Czb5QvjizSx7A3308mRzqAwujSywQbYfwc0iU8zqjS0yQ6ztEHX9332KCaGNIYB/Qq1z3yN0oDZBWyeFYJBCkm2sXLhDtpKFwNDMu5TnrZpYGiHbK4Nlwikg5DrYV1g6iPoJmzE5MKd/fOp53EPUaQZaLqH3u+vo2ELWp3wSyWuYGoj9EEIJoV3L9AUS/ZLsJpLNBXmqOu0CW6P5A/dx9IL0FAji/FYKot9EqE0Tvs6QBUe/2CxMEkZAlBNGPhdoAQWyTSmbxUwvUygwQyMmniAPgLt87CODXHuftWJIQgzrfQDC5AfwSgz9MmmG/gWCOqDgZ4JsQeTvZBoJJDhAFEsSDyxUEEUUekk0UEMhjBcEcGsoWVpBU3NcCgkkPkJWrKbdRZvULCMTWhYEdMrayBQRyqHcnSLmAIH7LcWJ8Hch7BsHEdWFpJsZjziCgFBpZ9TPm4e0XBJTTJKt9xjy8RoLI4gimPLP5goCSgWTrEcyzsy8IqmZVMo0H5bJiQToBCOjZ5RcElhjLN3dU7uQMAvoxwQkJZKI1CQzCthJYEigahHuDDi4rFwzCPQ7F1fiDQZgTR5iJwEGYRgIsiECD8BwwMAEfDcIaW8CRBQdhjS1kJQEchDEFhiRKr4KDFPS9FGQNVwEHoW83QjsEHdkfnuIOl6C1NjMItiaCaCWgbdpFJXQ9soh2uoB9aJcCxFdgZwlcrTmvENGlrITBBdpK25Qhd1F2RScq8CKu/gsCL8qN5THjy+Rr5E6joYgPxpdl518QrCf8Kpgjn6C8HLkbb+vt7ZM8wdVvy258khsRfHaS5DalDnlidZT7Erk+SXV5Bj1D3LS29XyhVJuoKHs9Q8S6reK11oUc7vPcr9uswP3SLiDINefXOF5rwCuGzVT6zVkVPfh2wWmHcz4wAwba2cgN1/Tsvleu7//i69CgVyt1GwjOs2+XK3rtbl151Tg3vOeioG40Mz2V+6pQ4xbJHOZj6g0EMxk93tV7fuedvVZpQSPhbwNBGInrymGrwNh1GXmL8F+lAaJ+NU/fzcmvJqvKj7177+1v1GY/GiBKI1Fdy/2XK6upXwaIJpI8B/399W0mH9zzafKaeCF9J0WF+jyCuFusTGzZKhFH8dVLZql2brxgcdVBKb7KG/7UZTmB3XJ6uL/QYT5ScRI74FcHEJ7feopyfGkaeaGlPoCw/BbjZmSBWIvINQNmTxdjWJqwUI8sztR4nYPuIPSTSUnOCZOE3ierqRoJfNSQxDjLEYs8i91eqgFCDSWiFHiuqAN9CwEGCPEISVjvwhS7Mfx6dtX8kC5aqvneGBOEFN2v6RBiYwr3DQOkLhEW6fHFbIwFQnkLiWYmZxE220z/aedPx99C+hiyKR4OzNFhg8S75CJTnxQ1dyugHTLaY10iu9dBpmhQtMz1ABLrkgtHVnRsPUO3OcU25i8cWdGxZbflCBKJqBdMs3aF/dYhNexU9RFcYEmLXYQKghyWdufyldBSU3KpjkKhZclxTXQGCTkL/HZDUIH5+Gkt4SgoCtj7pSYSNJLTK3VVRnmXZxebSMBIzmHABeIdXBebiN9eHYtUZ62ab3BdGkUm+SKJw1bdRXeewaX7qqdAnljg2sVxg3guAk3baofcg9yZ2eZpnHNvSFrEqhB9YPjesmt0pt6Xc8hl7W5L9Q4Xx09ctsrd5VhWeF6nF8SRrZdw49qns//0xTK/AZ8vGr3caTliuzeFNeCJTgafpKlhHd2WP1sy1LqDF798gjKJPLqDr9keoTd43+NyNzC1CI8Xy2lcPtOaVBI5IiAWyQ3e125AcKoXs2Djhy5eVc3KiBxREIPkhjBiLhIjU++4T91IbggjRiCJLSEIwWGddkEaxlVN5KCArPHk8mXVpHk8FHH7JL3n5dPA7C90q7XkeFJucacNmGXeRfswLE71HA79efaGiCN/Ofjmfmtcp8X10tIsqCacV5xfRWjNUiXGYbovWgyFYHcQLak15K9oM5zqmgaeKsHJetbSHfSPzXOiw/rxE9YH4CXaUpsZ0ztemFurP95Jpyvrd29YTpIZr7cEJHqfc7Wl0PFm2+yJR70udaokKFtGPTdm8WdQe24+HmVLlueboWQquBcYYVH2vEzfh8kCks1p90eWsLCyZ8qK7E86Oe+3XYFnBuiWdth20UqZR5SvMoyPg3WNauJipi0LMTQgVq5xUUlZcrPsopPHJ926z8pm7xyFLrH/PxpHSoXKdWgXsLn1scZn1ZDd/2vszN3lt254qkE+qu3yoqLM+ghN3Qz2qcVzUC/ZMFsK/alU6l0OWV/bQz6v6yYbyuN5BaZ4A7Y30vs/PPksS2+qzlvfF7OQmzzcL7W+xa7OIfRuVdtn/tdvdFLnL4OTKcm2W16PmWc4FWWXNSlWM2n3D+uPxuyrcfo74aP+Ac30a82+oLmfAAAAAElFTkSuQmCC">
							</span>


							<div class="space space-4"></div>

							
						</div>

						<div class="col-xs-12 col-sm-9">
                            <?php
                            userd();
                            ?>
<!-- 							
							<div class="profile-user-info">
								<div class="profile-info-row">
									<div class="profile-info-name"> Name </div>

									<div class="profile-info-value">
										<span>Abhinav Monga</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Age </div>

									<div class="profile-info-value">
										
										<span>19</span>
										<span>Amsterdam</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Blood Group </div>

									<div class="profile-info-value">
										<span>B+</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Mobile NO. </div>

									<div class="profile-info-value">
										<span>8708314190</span>
									</div>
								</div> -->

								<!-- <div class="profile-info-row">
									<div class="profile-info-name"> Last Online </div>

									<div class="profile-info-value">
										<span>3 hours ago</span>
									</div>
								</div> -->
							

							<div class="hr hr-8 dotted"></div>

							<!-- <div class="profile-user-info">
								<div class="profile-info-row">
									<div class="profile-info-name"> Website </div>

									<div class="profile-info-value">
										<a href="#" target="_blank">www.alexdoe.com</a>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name">
										<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
									</div>

									< <div class="profile-info-value">
										<a href="#">Find me on Facebook</a>
									</div> -->
								<!-- </div>

								<div class="profile-info-row">
									<div class="profile-info-name">
										<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
									</div> --> 

									<!-- <div class="profile-info-value">
										<a href="#">Follow me on Twitter</a>
									</div> -->
								</div>
							</div>
						</div><!-- /.col -->
					</div><!-- /.row -->

					<div class="space-20"></div>

				
			</div>
		</div>
    </div>
    <div class="container-fluid">
            <div class="row">
              <div class="col-sm-9" id="feed">
					
                    <!-- <div class="col-md-6">-->
						<canvas id="myChart" style="width:50% ; height:80% ;margin-top: 10px" ></canvas> 
                    <!-- </div>  -->
                  
                </div>
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script type = "text/javascript">
                    var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'line',
                options: {
                  legend: {
                    display: false,
                  },
                  scales: {
                    xAxes: [{
                      gridLines: {
                        display: false,
                      },
                      ticks: {
                        fontSize: 15,
                        fontColor: '#ADD8E6'
                      }
                    }],
                    yAxes: [{
                      gridLines: {
                        drawBorder: false,
                      },
                      ticks: {
                        beginAtZero: true,
                        fontSize: 15,
                        fontColor: '#ADD8E6',
                        maxTicksLimit: 5,
                        padding: 25,
                      }
                    }]
                  },
                  tooltips: {
                    backgroundColor: '#ADD8E6'
                  }
                },
                data: {
                  labels: ['M', 'Tu', 'W', 'Th', 'F', 'Sa', 'Su'],
                datasets: [{
                  data: [10, 30, 40, 11, 9, 17, 13],
                  tension: 0.0,
                  borderColor: 'rgb(255,190,70)',
                  backgroundColor: 'rgba(0,0,0,0.0)',
                  pointBackgroundColor: ['white', 'white', 'white', 'white', 'white', 'white', 'rgb(255,190,70)'],
                  pointRadius: 4,
                  borderWidth: 2
                }]
              }
            });
                    
                </script>
            </div>
              
            
            
             
            </div>
        </div>
       
        <div class="container-fluid abc">
                <button type="button" class="btn btn-primary btn-lg">Click To Upload New Record</button>
            </div>
           <form method="GET">

           <div class="container-fluid bcd">
                <input type="text" name="userid" style="display:none" value="<?php echo $_GET['userid']; ?>">
                    <button type="submit"  name ="submit" class="btn btn-primary btn-lg"><a style="color:white" href="preview.php?userid=<?php echo $_GET['userid']; ?>">Click To See Previous Records</a></button>
                </div>
           </form>
                <?php
                    // drpres();
                ?>
        
        <!-- <div class="container-fluid abc" > 
                <div class="row">
                    <div class="col-md-6">
                        <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
                        <h2>
                            Click To Upload New Record
                        </h2>
                       
                        <button type="button" class="btn btn-success">
                            New Upload
                        </button>
                    </div>
                    <div class="col-md-6">
                        <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
                        <h2>
                            Click To See Previous Records
                        </h2>
                       
                        <button type="button" class="btn btn-success">
                            Previous Records
                        </button>
                    </div>
                </div>
            </div> -->    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>