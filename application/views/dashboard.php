<?php 
// echo $logged_in['su'];
// echo $this->session->userdata('gid');
?>
 <style>
 .container-fluid{
	 padding:0px;
 }


#groupgraph,#rad_graph{
    box-shadow: 5px 5px 44px grey;

}

 #login{
/* 	 background: #673AB7; */
	/* background-image: url('../images1/blue.jpg'); */
	/*background-image: url('../images1/gg.jpg');*/

	background-repeat: no-repeat;
   /*  background: linear-gradient(to top, rgb(28, 89, 157), rgb(75, 153, 219)); */
	background-size:cover;
	background-attachment: fixed;
	position: relative;
	z-index: 10;
	overflow: hidden;
	margin-top:-20px;
 }
@media print {
   
   .navbar{
   display:none;
   }
   #footer{
   display:none;
   } 
   .printbtn{
	  display:none; 
   }
   #social_share{
	   display:none;
   }
   #page_break2{
	   
   page-break-after: always;
	}
}
 th {
    background: #f4b609 none repeat scroll 0 0;
}
.canvasjs-chart-credit {
    display: none;
}
 td{
		font-size:14px;
		padding:4px;
	}
	.mb50
	{
		/* margin-bottom:50px; */
	}
	.mb30
	{
		margin-bottom:30px;
	}
	.fontbold
	{
		font-weight:bold;
	}
</style>




<!-- new design css  -->


<style>



.small-box {
    border-radius: 2px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
}
.small-box>.inner {
    padding: 10px
}
.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255, 255, 255, 0.8);
    display: block;
    z-index: 10;
    background: rgba(0, 0, 0, 0.1);
    text-decoration: none
}
.small-box>.small-box-footer:hover {
    color: #fff;
    background: rgba(0, 0, 0, 0.15)
}
.small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 10px 0;
    white-space: nowrap;
    padding: 0
}
.small-box p {
    font-size: 15px
}
.small-box p>small {
    display: block;
    color: #f9f9f9;
    font-size: 13px;
    margin-top: 5px
}
.small-box h3,
.small-box p {
    z-index: 5
}
.small-box .icon {
    -webkit-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    position: absolute;
    top: -10px;
    right: 10px;
    z-index: 0;
    font-size: 90px;
    color: rgba(0, 0, 0, 0.15)
}
.small-box:hover {
    text-decoration: none;
    color: #f9f9f9
}
.small-box:hover .icon {
    font-size: 95px
}
@media (max-width: 767px) {
    .small-box {
        text-align: center
    }
    .small-box .icon {
        display: none
    }
    .small-box p {
        font-size: 12px
    }
}
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
}
.box.box-primary {
   /* border-top-color: #3c8dbc*/
    border-top-color: #4169e1;
}
.box.box-info {
    border-top-color: #00c0ef
}
.box.box-danger {
    border-top-color: #dd4b39
}
.box.box-warning {
    border-top-color: #f39c12
}
.box.box-success {
    border-top-color: #00a65a
}
.box.box-default {
    border-top-color: #d2d6de
}
.box.collapsed-box .box-body,
.box.collapsed-box .box-footer {
    display: none
}
.box .nav-stacked>li {
    border-bottom: 1px solid #f4f4f4;
    margin: 0
}
.box .nav-stacked>li:last-of-type {
    border-bottom: none
}
.box.height-control .box-body {
    max-height: 300px;
    overflow: auto
}
.box .border-right {
    border-right: 1px solid #f4f4f4
}
.box .border-left {
    border-left: 1px solid #f4f4f4
}
.box.box-solid {
    border-top: 0
}
.box.box-solid>.box-header .btn.btn-default {
    background: transparent
}
.box.box-solid>.box-header .btn:hover,
.box.box-solid>.box-header a:hover {
    background: rgba(0, 0, 0, 0.1)
}
.box.box-solid.box-default {
    border: 1px solid #d2d6de
}
.box.box-solid.box-default>.box-header {
    color: #444;
    background: #d2d6de;
    background-color: #d2d6de
}
.box.box-solid.box-default>.box-header a,
.box.box-solid.box-default>.box-header .btn {
    color: #444
}
.box.box-solid.box-primary {
    border: 1px solid #3c8dbc
}
.box.box-solid.box-primary>.box-header {
    color: #fff;
    background: #3c8dbc;
    background-color: #3c8dbc
}
.box.box-solid.box-primary>.box-header a,
.box.box-solid.box-primary>.box-header .btn {
    color: #fff
}
.box.box-solid.box-info {
    border: 1px solid #00c0ef
}
.box.box-solid.box-info>.box-header {
    color: #fff;
    background: #00c0ef;
    background-color: #00c0ef
}
.box.box-solid.box-info>.box-header a,
.box.box-solid.box-info>.box-header .btn {
    color: #fff
}
.box.box-solid.box-danger {
    border: 1px solid #dd4b39
}
.box.box-solid.box-danger>.box-header {
    color: #fff;
    background: #dd4b39;
    background-color: #dd4b39
}
.box.box-solid.box-danger>.box-header a,
.box.box-solid.box-danger>.box-header .btn {
    color: #fff
}
.box.box-solid.box-warning {
    border: 1px solid #f39c12
}
.box.box-solid.box-warning>.box-header {
    color: #fff;
    background: #f39c12;
    background-color: #f39c12
}
.box.box-solid.box-warning>.box-header a,
.box.box-solid.box-warning>.box-header .btn {
    color: #fff
}
.box.box-solid.box-success {
    border: 1px solid #00a65a
}
.box.box-solid.box-success>.box-header {
    color: #fff;
    background: #00a65a;
    background-color: #00a65a
}
.box.box-solid.box-success>.box-header a,
.box.box-solid.box-success>.box-header .btn {
    color: #fff
}
.box.box-solid>.box-header>.box-tools .btn {
    border: 0;
    box-shadow: none
}
.box.box-solid[class*='bg']>.box-header {
    color: #fff
}
.box .box-group>.box {
    margin-bottom: 5px
}
.box .knob-label {
    text-align: center;
    color: #333;
    font-weight: 100;
    font-size: 12px;
    margin-bottom: 0.3em
}
.box>.overlay,
.overlay-wrapper>.overlay,
.box>.loading-img,
.overlay-wrapper>.loading-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}
.box .overlay,
.overlay-wrapper .overlay {
    z-index: 50;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px
}
.box .overlay>.fa,
.overlay-wrapper .overlay>.fa {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -15px;
    margin-top: -15px;
    color: #000;
    font-size: 30px
}
.box .overlay.dark,
.overlay-wrapper .overlay.dark {
    background: rgba(0, 0, 0, 0.5)
}
.box-header:before,
.box-body:before,
.box-footer:before,
.box-header:after,
.box-body:after,
.box-footer:after {
    content: " ";
    display: table
}
.box-header:after,
.box-body:after,
.box-footer:after {
    clear: both
}
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4
}
.collapsed-box .box-header.with-border {
    border-bottom: none
}
.box-header>.fa,
.box-header>.glyphicon,
.box-header>.ion,
.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1
}
.box-header>.fa,
.box-header>.glyphicon,
.box-header>.ion {
    margin-right: 5px
}
.box-header>.box-tools {
    position: absolute;
    right: 10px;
    top: 5px
}
.box-header>.box-tools [data-toggle="tooltip"] {
    position: relative
}
.box-header>.box-tools.pull-right .dropdown-menu {
    right: 0;
    left: auto
}
.box-header>.box-tools .dropdown-menu>li>a {
    color: #444!important
}
.btn-box-tool {
    padding: 5px;
    font-size: 12px;
    background: transparent;
    color: #97a0b3
}
.open .btn-box-tool,
.btn-box-tool:hover {
    color: #606c84
}
.btn-box-tool.btn:active {
    box-shadow: none
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px
}
.no-header .box-body {
    border-top-right-radius: 3px;
    border-top-left-radius: 3px
}
.box-body>.table {
    margin-bottom: 0
}
.box-body .fc {
    margin-top: 5px
}
.box-body .full-width-chart {
    margin: -19px
}
.box-body.no-padding .full-width-chart {
    margin: -9px
}
.box-body .box-pane {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 3px
}
.box-body .box-pane-right {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 0
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff
}
.chart-legend {
    margin: 10px 0
}
@media (max-width: 991px) {
    .chart-legend>li {
        float: left;
        margin-right: 10px
    }
}
.box-comments {
    background: #f7f7f7
}
.box-comments .box-comment {
    padding: 8px 0;
    border-bottom: 1px solid #eee
}
.box-comments .box-comment:before,
.box-comments .box-comment:after {
    content: " ";
    display: table
}
.box-comments .box-comment:after {
    clear: both
}
.box-comments .box-comment:last-of-type {
    border-bottom: 0
}
.box-comments .box-comment:first-of-type {
    padding-top: 0
}
.box-comments .box-comment img {
    float: left
}
.box-comments .comment-text {
    margin-left: 40px;
    color: #555
}
.box-comments .username {
    color: #444;
    display: block;
    font-weight: 600
}
.box-comments .text-muted {
    font-weight: 400;
    font-size: 12px
}
.todo-list {
    margin: 0;
    padding: 0;
    list-style: none;
    overflow: auto
}
.todo-list>li {
    border-radius: 2px;
    padding: 10px;
    background: #f4f4f4;
    margin-bottom: 2px;
    border-left: 2px solid #e6e7e8;
    color: #444
}
.todo-list>li:last-of-type {
    margin-bottom: 0
}
.todo-list>li>input[type='checkbox'] {
    margin: 0 10px 0 5px
}
.todo-list>li .text {
    display: inline-block;
    margin-left: 5px;
    font-weight: 600
}
.todo-list>li .label {
    margin-left: 10px;
    font-size: 9px
}
.todo-list>li .tools {
    display: none;
    float: right;
    color: #dd4b39
}
.todo-list>li .tools>.fa,
.todo-list>li .tools>.glyphicon,
.todo-list>li .tools>.ion {
    margin-right: 5px;
    cursor: pointer
}
.todo-list>li:hover .tools {
    display: inline-block
}
.todo-list>li.done {
    color: #999
}
.todo-list>li.done .text {
    text-decoration: line-through;
    font-weight: 500
}
.todo-list>li.done .label {
    background: #d2d6de !important
}
.todo-list .danger {
    border-left-color: #dd4b39
}
.todo-list .warning {
    border-left-color: #f39c12
}
.todo-list .info {
    border-left-color: #00c0ef
}
.todo-list .success {
    border-left-color: #00a65a
}
.todo-list .primary {
    border-left-color: #3c8dbc
}
.todo-list .handle {
    display: inline-block;
    cursor: move;
    margin: 0 5px
}
.chat {
    padding: 5px 20px 5px 10px
}
.chat .item {
    margin-bottom: 10px
}
.chat .item:before,
.chat .item:after {
    content: " ";
    display: table
}
.chat .item:after {
    clear: both
}
.chat .item>img {
    width: 40px;
    height: 40px;
    border: 2px solid transparent;
    border-radius: 50%
}
.chat .item>.online {
    border: 2px solid #00a65a
}
.chat .item>.offline {
    border: 2px solid #dd4b39
}
.chat .item>.message {
    margin-left: 55px;
    margin-top: -40px
}
.chat .item>.message>.name {
    display: block;
    font-weight: 600
}
.chat .item>.attachment {
    border-radius: 3px;
    background: #f4f4f4;
    margin-left: 65px;
    margin-right: 15px;
    padding: 10px
}
.chat .item>.attachment>h4 {
    margin: 0 0 5px 0;
    font-weight: 600;
    font-size: 14px
}
.chat .item>.attachment>p,
.chat .item>.attachment>.filename {
    font-weight: 600;
    font-size: 13px;
    font-style: italic;
    margin: 0
}
.chat .item>.attachment:before,
.chat .item>.attachment:after {
    content: " ";
    display: table
}
.chat .item>.attachment:after {
    clear: both
}
.box-input {
    max-width: 200px
}
.modal .panel-body {
    color: #444
}
.info-box {
    display: block;
    min-height: 90px;
    background: #fff;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border-radius: 2px;
    margin-bottom: 15px
}
.info-box small {
    font-size: 14px
}
.info-box .progress {
    background: rgba(0, 0, 0, 0.2);
    margin: 5px -10px 5px -10px;
    height: 2px
}
.info-box .progress,
.info-box .progress .progress-bar {
    border-radius: 0
}
.info-box .progress .progress-bar {
    background: #fff
}
.info-box-icon {
    border-top-left-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 2px;
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0, 0, 0, 0.2)
}
.info-box-icon>img {
    max-width: 100%
}
.info-box-content {
    padding: 5px 10px;
    margin-left: 90px
}
.info-box-number {
    display: block;
    font-weight: bold;
    font-size: 18px
}
.progress-description,
.info-box-text {
    display: block;
    font-size: 14px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}
.info-box-text {
    text-transform: uppercase
}
.info-box-more {
    display: block
}
.progress-description {
    margin: 0
}
.timeline {
    position: relative;
    margin: 0 0 30px 0;
    padding: 0;
    list-style: none
}
.timeline:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 4px;
    background: #ddd;
    left: 31px;
    margin: 0;
    border-radius: 2px
}
.timeline>li {
    position: relative;
    margin-right: 10px;
    margin-bottom: 15px
}
.timeline>li:before,
.timeline>li:after {
    content: " ";
    display: table
}
.timeline>li:after {
    clear: both
}
.timeline>li>.timeline-item {
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    margin-top: 0;
    background: #fff;
    color: #444;
    margin-left: 60px;
    margin-right: 15px;
    padding: 0;
    position: relative
}
.timeline>li>.timeline-item>.time {
    color: #999;
    float: right;
    padding: 10px;
    font-size: 12px
}
.timeline>li>.timeline-item>.timeline-header {
    margin: 0;
    color: #555;
    border-bottom: 1px solid #f4f4f4;
    padding: 10px;
    font-size: 16px;
    line-height: 1.1
}
.timeline>li>.timeline-item>.timeline-header>a {
    font-weight: 600
}
.timeline>li>.timeline-item>.timeline-body,
.timeline>li>.timeline-item>.timeline-footer {
    padding: 10px
}
.timeline>li>.fa,
.timeline>li>.glyphicon,
.timeline>li>.ion {
    width: 30px;
    height: 30px;
    font-size: 15px;
    line-height: 30px;
    position: absolute;
    color: #666;
    background: #d2d6de;
    border-radius: 50%;
    text-align: center;
    left: 18px;
    top: 0
}
.timeline>.time-label>span {
    font-weight: 600;
    padding: 5px;
    display: inline-block;
    background-color: #fff;
    border-radius: 4px
}
.timeline-inverse>li>.timeline-item {
    background: #f0f0f0;
    border: 1px solid #ddd;
    -webkit-box-shadow: none;
    box-shadow: none;
	max-height:166px;
	min-height:166px;
}
.timeline-inverse>li>.timeline-item>.timeline-header {
    border-bottom-color: #ddd
}
.btn {
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid transparent
}
.btn.uppercase {
    text-transform: uppercase
}
.btn.btn-flat {
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-width: 1px
}
.btn:active {
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    -moz-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
}
.btn:focus {
    outline: none
}
.btn.btn-file {
    position: relative;
    overflow: hidden
}
.btn.btn-file>input[type='file'] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    opacity: 0;
    filter: alpha(opacity=0);
    outline: none;
    background: white;
    cursor: inherit;
    display: block
}
.btn-default {
    background-color: #f4f4f4;
    color: #444;
    border-color: #ddd
}
.btn-default:hover,
.btn-default:active,
.btn-default.hover {
    background-color: #e7e7e7
}
.btn-primary {
    background-color: #3c8dbc;
    border-color: #367fa9
}
.btn-primary:hover,
.btn-primary:active,
.btn-primary.hover {
    background-color: #367fa9
}
.btn-success {
    background-color: #00a65a;
    border-color: #008d4c
}
.btn-success:hover,
.btn-success:active,
.btn-success.hover {
    background-color: #008d4c
}
.btn-info {
    background-color: #00c0ef;
    border-color: #00acd6
}
.btn-info:hover,
.btn-info:active,
.btn-info.hover {
    background-color: #00acd6
}
.btn-danger {
    background-color: #dd4b39;
    border-color: #d73925
}
.btn-danger:hover,
.btn-danger:active,
.btn-danger.hover {
    background-color: #d73925
}
.btn-warning {
    background-color: #f39c12;
    border-color: #e08e0b
}
.btn-warning:hover,
.btn-warning:active,
.btn-warning.hover {
    background-color: #e08e0b
}
.btn-outline {
    border: 1px solid #fff;
    background: transparent;
    color: #fff
}
.btn-outline:hover,
.btn-outline:focus,
.btn-outline:active {
    color: rgba(255, 255, 255, 0.7);
    border-color: rgba(255, 255, 255, 0.7)
}
.btn-link {
    -webkit-box-shadow: none;
    box-shadow: none
}
.btn[class*='bg-']:hover {
    -webkit-box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.2)
}
.btn-app {
    border-radius: 3px;
    position: relative;
    padding: 15px 5px;
    margin: 0 0 10px 10px;
    min-width: 80px;
    height: 60px;
    text-align: center;
    color: #666;
    border: 1px solid #ddd;
    background-color: #f4f4f4;
    font-size: 12px
}
.btn-app>.fa,
.btn-app>.glyphicon,
.btn-app>.ion {
    font-size: 20px;
    display: block
}
.btn-app:hover {
    background: #f4f4f4;
    color: #444;
    border-color: #aaa
}
.btn-app:active,
.btn-app:focus {
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    -moz-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
}
.btn-app>.badge {
    position: absolute;
    top: -3px;
    right: -10px;
    font-size: 10px;
    font-weight: 400
}
.callout {
    border-radius: 3px;
    margin: 0 0 20px 0;
    padding: 15px 30px 15px 15px;
    border-left: 5px solid #eee
}
.callout a {
    color: #fff;
    text-decoration: underline
}
.callout a:hover {
    color: #eee
}
.callout h4 {
    margin-top: 0;
    font-weight: 600
}
.callout p:last-child {
    margin-bottom: 0
}
.callout code,
.callout .highlight {
    background-color: #fff
}
.callout.callout-danger {
    border-color: #c23321
}
.callout.callout-warning {
    border-color: #c87f0a
}
.callout.callout-info {
    border-color: #0097bc
}
.callout.callout-success {
    border-color: #00733e
}
.alert {
    border-radius: 3px
}
.alert h4 {
    font-weight: 600
}
.alert .icon {
    margin-right: 10px
}
.alert .close {
    color: #000;
    opacity: .2;
    filter: alpha(opacity=20)
}
.alert .close:hover {
    opacity: .5;
    filter: alpha(opacity=50)
}
.alert a {
    color: #fff;
    text-decoration: underline
}
.alert-success {
    border-color: #008d4c
}


.alert-error {
    border-color: #d73925
}
.alert-warning {
    border-color: #e08e0b
}
.alert-info {
    border-color: #00acd6
}
.nav>li>a:hover,
.nav>li>a:active,
.nav>li>a:focus {
    color: #444;
    background: #f7f7f7
}
.nav-pills>li>a {
    border-radius: 0;
    border-top: 3px solid transparent;
    color: #444
}
.nav-pills>li>a>.fa,
.nav-pills>li>a>.glyphicon,
.nav-pills>li>a>.ion {
    margin-right: 5px
}
.nav-pills>li.active>a,
.nav-pills>li.active>a:hover,
.nav-pills>li.active>a:focus {
    border-top-color: #3c8dbc
}
.nav-pills>li.active>a {
    font-weight: 600
}
.nav-stacked>li>a {
    border-radius: 0;
    border-top: 0;
    border-left: 3px solid transparent;
    color: #444
}
.nav-stacked>li.active>a,
.nav-stacked>li.active>a:hover {
    background: transparent;
    color: #444;
    border-top: 0;
    border-left-color: #3c8dbc
}
.nav-stacked>li.header {
    border-bottom: 1px solid #ddd;
    color: #777;
    margin-bottom: 10px;
    padding: 5px 10px;
    text-transform: uppercase
}
.nav-tabs-custom {
    margin-bottom: 20px;
    background: #fff;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border-radius: 3px
}
.nav-tabs-custom>.nav-tabs {
    margin: 0;
    border-bottom-color: #f4f4f4;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px
}
.nav-tabs-custom>.nav-tabs>li {
    border-top: 3px solid transparent;
    margin-bottom: -2px;
    margin-right: 5px
}
.nav-tabs-custom>.nav-tabs>li.disabled>a {
    color: #777
}
.nav-tabs-custom>.nav-tabs>li>a {
    color: #444;
    border-radius: 0
}
.nav-tabs-custom>.nav-tabs>li>a.text-muted {
    color: #999
}
.nav-tabs-custom>.nav-tabs>li>a,
.nav-tabs-custom>.nav-tabs>li>a:hover {
    background: transparent;
    margin: 0
}
.nav-tabs-custom>.nav-tabs>li>a:hover {
    color: #999
}
.nav-tabs-custom>.nav-tabs>li:not(.active)>a:hover,
.nav-tabs-custom>.nav-tabs>li:not(.active)>a:focus,
.nav-tabs-custom>.nav-tabs>li:not(.active)>a:active {
    border-color: transparent
}
.nav-tabs-custom>.nav-tabs>li.active {
    border-top-color: #3c8dbc
}
.nav-tabs-custom>.nav-tabs>li.active>a,
.nav-tabs-custom>.nav-tabs>li.active:hover>a {
    background-color: #fff;
    color: #444
}
.nav-tabs-custom>.nav-tabs>li.active>a {
    border-top-color: transparent;
    border-left-color: #f4f4f4;
    border-right-color: #f4f4f4
}
.nav-tabs-custom>.nav-tabs>li:first-of-type {
    margin-left: 0
}
.nav-tabs-custom>.nav-tabs>li:first-of-type.active>a {
    border-left-color: transparent
}
.nav-tabs-custom>.nav-tabs.pull-right {
    float: none !important
}
.nav-tabs-custom>.nav-tabs.pull-right>li {
    float: right
}
.nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type {
    margin-right: 0
}
.nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type>a {
    border-left-width: 1px
}
.nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type.active>a {
    border-left-color: #f4f4f4;
    border-right-color: transparent
}
.nav-tabs-custom>.nav-tabs>li.header {
    line-height: 35px;
    padding: 0 10px;
    font-size: 20px;
    color: #444
}
.nav-tabs-custom>.nav-tabs>li.header>.fa,
.nav-tabs-custom>.nav-tabs>li.header>.glyphicon,
.nav-tabs-custom>.nav-tabs>li.header>.ion {
    margin-right: 5px
}
.nav-tabs-custom>.tab-content {
    background: #fff;
    padding: 10px;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px
}
.nav-tabs-custom .dropdown.open>a:active,
.nav-tabs-custom .dropdown.open>a:focus {
    background: transparent;
    color: #999
}
.nav-tabs-custom.tab-primary>.nav-tabs>li.active {
    border-top-color: #3c8dbc
}
.nav-tabs-custom.tab-info>.nav-tabs>li.active {
    border-top-color: #00c0ef
}
.nav-tabs-custom.tab-danger>.nav-tabs>li.active {
    border-top-color: #dd4b39
}
.nav-tabs-custom.tab-warning>.nav-tabs>li.active {
    border-top-color: #f39c12
}
.nav-tabs-custom.tab-success>.nav-tabs>li.active {
    border-top-color: #00a65a
}
.nav-tabs-custom.tab-default>.nav-tabs>li.active {
    border-top-color: #d2d6de
}
.pagination>li>a {
    background: #fafafa;
    color: #666
}
.pagination.pagination-flat>li>a {
    border-radius: 0 !important
}
.products-list {
    list-style: none;
    margin: 0;
    padding: 0
}
.products-list>.item {
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
    background: #fff
}
.products-list>.item:before,
.products-list>.item:after {
    content: " ";
    display: table
}
.products-list>.item:after {
    clear: both
}
.products-list .product-img {
    float: left
}
.products-list .product-img img {
    width: 50px;
    height: 50px
}
.products-list .product-info {
    margin-left: 60px
}
.products-list .product-title {
    font-weight: 600
}
.products-list .product-description {
    display: block;
    color: #999;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis
}
.product-list-in-box>.item {
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    border-bottom: 1px solid #f4f4f4
}
.product-list-in-box>.item:last-of-type {
    border-bottom-width: 0
}
.table>thead>tr>th,
.table>tbody>tr>th,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>tbody>tr>td,
.table>tfoot>tr>td {
    border-top: 1px solid #f4f4f4
}
.table>thead>tr>th {
    border-bottom: 2px solid #f4f4f4
}
.table tr td .progress {
    margin-top: 5px
}
.table-bordered {
    border: 1px solid #f4f4f4
}
.table-bordered>thead>tr>th,
.table-bordered>tbody>tr>th,
.table-bordered>tfoot>tr>th,
.table-bordered>thead>tr>td,
.table-bordered>tbody>tr>td,
.table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4
}
.table-bordered>thead>tr>th,
.table-bordered>thead>tr>td {
    border-bottom-width: 2px
}
.table.no-border,
.table.no-border td,
.table.no-border th {
    border: 0
}
table.text-center,
table.text-center td,
table.text-center th {
    text-align: center
}
.table.align th {
    text-align: left
}
.table.align td {
    text-align: right
}
.label-default {
    background-color: #d2d6de;
    color: #444
}
.direct-chat .box-body {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    position: relative;
    overflow-x: hidden;
    padding: 0
}
.direct-chat.chat-pane-open .direct-chat-contacts {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0)
}
.direct-chat-messages {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
    padding: 10px;
    height: 250px;
    overflow: auto
}
.direct-chat-msg,
.direct-chat-text {
    display: block
}
.direct-chat-msg {
    margin-bottom: 10px
}
.direct-chat-msg:before,
.direct-chat-msg:after {
    content: " ";
    display: table
}
.direct-chat-msg:after {
    clear: both
}
.direct-chat-messages,
.direct-chat-contacts {
    -webkit-transition: -webkit-transform .5s ease-in-out;
    -moz-transition: -moz-transform .5s ease-in-out;
    -o-transition: -o-transform .5s ease-in-out;
    transition: transform .5s ease-in-out
}
.direct-chat-text {
    border-radius: 5px;
    position: relative;
    padding: 5px 10px;
    background: #d2d6de;
    border: 1px solid #d2d6de;
    margin: 5px 0 0 50px;
    color: #444
}
.direct-chat-text:after,
.direct-chat-text:before {
    position: absolute;
    right: 100%;
    top: 15px;
    border: solid transparent;
    border-right-color: #d2d6de;
    content: ' ';
    height: 0;
    width: 0;
    pointer-events: none
}
.direct-chat-text:after {
    border-width: 5px;
    margin-top: -5px
}
.direct-chat-text:before {
    border-width: 6px;
    margin-top: -6px
}
.right .direct-chat-text {
    margin-right: 50px;
    margin-left: 0
}
.right .direct-chat-text:after,
.right .direct-chat-text:before {
    right: auto;
    left: 100%;
    border-right-color: transparent;
    border-left-color: #d2d6de
}
.direct-chat-img {
    border-radius: 50%;
    float: left;
    width: 40px;
    height: 40px
}
.right .direct-chat-img {
    float: right
}
.direct-chat-info {
    display: block;
    margin-bottom: 2px;
    font-size: 12px
}
.direct-chat-name {
    font-weight: 600
}
.direct-chat-timestamp {
    color: #999
}
.direct-chat-contacts-open .direct-chat-contacts {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0)
}
.direct-chat-contacts {
    -webkit-transform: translate(101%, 0);
    -ms-transform: translate(101%, 0);
    -o-transform: translate(101%, 0);
    transform: translate(101%, 0);
    position: absolute;
    top: 0;
    bottom: 0;
    height: 250px;
    width: 100%;
    background: #222d32;
    color: #fff;
    overflow: auto
}
.contacts-list>li {
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    padding: 10px;
    margin: 0
}
.contacts-list>li:before,
.contacts-list>li:after {
    content: " ";
    display: table
}
.contacts-list>li:after {
    clear: both
}
.contacts-list>li:last-of-type {
    border-bottom: none
}
.contacts-list-img {
    border-radius: 50%;
    width: 40px;
    float: left
}
.contacts-list-info {
    margin-left: 45px;
    color: #fff
}
.contacts-list-name,
.contacts-list-status {
    display: block
}
.contacts-list-name {
    font-weight: 600
}
.contacts-list-status {
    font-size: 12px
}
.contacts-list-date {
    color: #aaa;
    font-weight: normal
}
.contacts-list-msg {
    color: #999
}
.direct-chat-danger .right>.direct-chat-text {
    background: #dd4b39;
    border-color: #dd4b39;
    color: #fff
}
.direct-chat-danger .right>.direct-chat-text:after,
.direct-chat-danger .right>.direct-chat-text:before {
    border-left-color: #dd4b39
}
.direct-chat-primary .right>.direct-chat-text {
    background: #3c8dbc;
    border-color: #3c8dbc;
    color: #fff
}
.direct-chat-primary .right>.direct-chat-text:after,
.direct-chat-primary .right>.direct-chat-text:before {
    border-left-color: #3c8dbc
}
.direct-chat-warning .right>.direct-chat-text {
    background: #f39c12;
    border-color: #f39c12;
    color: #fff
}
.direct-chat-warning .right>.direct-chat-text:after,
.direct-chat-warning .right>.direct-chat-text:before {
    border-left-color: #f39c12
}
.direct-chat-info .right>.direct-chat-text {
    background: #00c0ef;
    border-color: #00c0ef;
    color: #fff
}
.direct-chat-info .right>.direct-chat-text:after,
.direct-chat-info .right>.direct-chat-text:before {
    border-left-color: #00c0ef
}
.direct-chat-success .right>.direct-chat-text {
    background: #00a65a;
    border-color: #00a65a;
    color: #fff
}
.direct-chat-success .right>.direct-chat-text:after,
.direct-chat-success .right>.direct-chat-text:before {
    border-left-color: #00a65a
}
.users-list>li {
    width: 25%;
    float: left;
    padding: 10px;
    text-align: center
}
.users-list>li img {
    border-radius: 50%;
    max-width: 100%;
    height: auto
}
.users-list>li>a:hover,
.users-list>li>a:hover .users-list-name {
    color: #999
}
.users-list-name,
.users-list-date {
    display: block
}
.users-list-name {
    font-weight: 600;
    color: #444;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis
}
.users-list-date {
    color: #999;
    font-size: 12px
}
.carousel-control.left,
.carousel-control.right {
    background-image: none
}
.carousel-control>.fa {
    font-size: 40px;
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -20px
}
.modal {
    background: rgba(0, 0, 0, 0.3)
}
.modal-content {
    border-radius: 0;
    -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.125);
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.125);
    border: 0
}
@media (min-width: 768px) {
    .modal-content {
        -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.125);
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.125)
    }
}
.modal-header {
    border-bottom-color: #f4f4f4
}
.modal-footer {
    border-top-color: #f4f4f4
}
.modal-primary .modal-header,
.modal-primary .modal-footer {
    border-color: #307095
}
.modal-warning .modal-header,
.modal-warning .modal-footer {
    border-color: #c87f0a
}
.modal-info .modal-header,
.modal-info .modal-footer {
    border-color: #0097bc
}
.modal-success .modal-header,
.modal-success .modal-footer {
    border-color: #00733e
}
.modal-danger .modal-header,
.modal-danger .modal-footer {
    border-color: #c23321
}
.box-widget {
    border: none;
    position: relative
}
.widget-user .widget-user-header {
    padding: 20px;
    height: 120px;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px
}
.widget-user .widget-user-username {
    margin-top: 0;
    margin-bottom: 5px;
    font-size: 25px;
    font-weight: 300;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2)
}
.widget-user .widget-user-desc {
    margin-top: 0
}
.widget-user .widget-user-image {
    position: absolute;
    top: 65px;
    left: 50%;
    margin-left: -45px
}
.widget-user .widget-user-image>img {
    width: 90px;
    height: auto;
    border: 3px solid #fff
}
.widget-user .box-footer {
    padding-top: 30px
}
.widget-user-2 .widget-user-header {
    padding: 20px;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px
}
.widget-user-2 .widget-user-username {
    margin-top: 5px;
    margin-bottom: 5px;
    font-size: 25px;
    font-weight: 300
}
.widget-user-2 .widget-user-desc {
    margin-top: 0
}
.widget-user-2 .widget-user-username,
.widget-user-2 .widget-user-desc {
    margin-left: 75px
}
.widget-user-2 .widget-user-image>img {
    width: 65px;
    height: auto;
    float: left
}
.treeview-menu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
    padding-left: 5px
}
.treeview-menu .treeview-menu {
    padding-left: 20px
}
.treeview-menu>li {
    margin: 0
}
.treeview-menu>li>a {
    padding: 5px 5px 5px 15px;
    display: block;
    font-size: 14px
}
.treeview-menu>li>a>.fa,
.treeview-menu>li>a>.glyphicon,
.treeview-menu>li>a>.ion {
    width: 20px
}
.treeview-menu>li>a>.pull-right-container>.fa-angle-left,
.treeview-menu>li>a>.pull-right-container>.fa-angle-down,
.treeview-menu>li>a>.fa-angle-left,
.treeview-menu>li>a>.fa-angle-down {
    width: auto
}
.mailbox-messages>.table {
    margin: 0
}
.mailbox-controls {
    padding: 5px
}
.mailbox-controls.with-border {
    border-bottom: 1px solid #f4f4f4
}
.mailbox-read-info {
    border-bottom: 1px solid #f4f4f4;
    padding: 10px
}
.mailbox-read-info h3 {
    font-size: 20px;
    margin: 0
}
.mailbox-read-info h5 {
    margin: 0;
    padding: 5px 0 0 0
}
.mailbox-read-time {
    color: #999;
    font-size: 13px
}
.mailbox-read-message {
    padding: 10px
}
.mailbox-attachments li {
    float: left;
    width: 200px;
    border: 1px solid #eee;
    margin-bottom: 10px;
    margin-right: 10px
}
.mailbox-attachment-name {
    font-weight: bold;
    color: #666
}
.mailbox-attachment-icon,
.mailbox-attachment-info,
.mailbox-attachment-size {
    display: block
}
.mailbox-attachment-info {
    padding: 10px;
    background: #f4f4f4
}
.mailbox-attachment-size {
    color: #999;
    font-size: 12px
}
.mailbox-attachment-icon {
    text-align: center;
    font-size: 65px;
    color: #666;
    padding: 20px 10px
}
.mailbox-attachment-icon.has-img {
    padding: 0
}
.mailbox-attachment-icon.has-img>img {
    max-width: 100%;
    height: auto
}
.lockscreen {
    background: #d2d6de
}
.lockscreen-logo {
    font-size: 35px;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 300
}
.lockscreen-logo a {
    color: #444
}
.lockscreen-wrapper {
    max-width: 400px;
    margin: 0 auto;
    margin-top: 10%
}
.lockscreen .lockscreen-name {
    text-align: center;
    font-weight: 600
}
.lockscreen-item {
    border-radius: 4px;
    padding: 0;
    background: #fff;
    position: relative;
    margin: 10px auto 30px auto;
    width: 290px
}
.lockscreen-image {
    border-radius: 50%;
    position: absolute;
    left: -10px;
    top: -25px;
    background: #fff;
    padding: 5px;
    z-index: 10
}
.lockscreen-image>img {
    border-radius: 50%;
    width: 70px;
    height: 70px
}
.lockscreen-credentials {
    margin-left: 70px
}
.lockscreen-credentials .form-control {
    border: 0
}
.lockscreen-credentials .btn {
    background-color: #fff;
    border: 0;
    padding: 0 10px
}
.lockscreen-footer {
    margin-top: 10px
}
.login-logo,
.register-logo {
    font-size: 35px;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 300
}
.login-logo a,
.register-logo a {
    color: #444
}
.login-page,
.register-page {
    background: #d2d6de
}
.login-box,
.register-box {
    width: 360px;
    margin: 7% auto
}
@media (max-width: 768px) {
    .login-box,
    .register-box {
        width: 90%;
        margin-top: 20px
    }
}
.login-box-body,
.register-box-body {
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #666
}
.login-box-body .form-control-feedback,
.register-box-body .form-control-feedback {
    color: #777
}
.login-box-msg,
.register-box-msg {
    margin: 0;
    text-align: center;
    padding: 0 20px 20px 20px
}
.social-auth-links {
    margin: 10px 0
}
.error-page {
    width: 600px;
    margin: 20px auto 0 auto
}
@media (max-width: 991px) {
    .error-page {
        width: 100%
    }
}
.error-page>.headline {
    float: left;
    font-size: 100px;
    font-weight: 300
}
@media (max-width: 991px) {
    .error-page>.headline {
        float: none;
        text-align: center
    }
}
.error-page>.error-content {
    margin-left: 190px;
    display: block
}
@media (max-width: 991px) {
    .error-page>.error-content {
        margin-left: 0
    }
}
.error-page>.error-content>h3 {
    font-weight: 300;
    font-size: 25px
}
@media (max-width: 991px) {
    .error-page>.error-content>h3 {
        text-align: center
    }
}
.invoice {
    position: relative;
    background: #fff;
    border: 1px solid #f4f4f4;
    padding: 20px;
    margin: 10px 25px
}
.invoice-title {
    margin-top: 0
}
.profile-user-img {
    margin: 0 auto;
    width: 100px;
    padding: 3px;
    /*border: 3px solid #d2d6de*/
	
    border: 3px solid #708090;
}
.profile-username {
    font-size: 21px;
    margin-top: 5px
}
.post {
    border-bottom: 1px solid #d2d6de;
    margin-bottom: 15px;
    padding-bottom: 15px;
    color: #666
}
.post:last-of-type {
    border-bottom: 0;
    margin-bottom: 0;
    padding-bottom: 0
}
.post .user-block {
    margin-bottom: 15px
}
.btn-social {
    position: relative;
    padding-left: 44px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}
.btn-social>:first-child {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 32px;
    line-height: 34px;
    font-size: 1.6em;
    text-align: center;
    border-right: 1px solid rgba(0, 0, 0, 0.2)
}
.btn-social.btn-lg {
    padding-left: 61px
}
.btn-social.btn-lg>:first-child {
    line-height: 45px;
    width: 45px;
    font-size: 1.8em
}
.btn-social.btn-sm {
    padding-left: 38px
}
.btn-social.btn-sm>:first-child {
    line-height: 28px;
    width: 28px;
    font-size: 1.4em
}
.btn-social.btn-xs {
    padding-left: 30px
}
.btn-social.btn-xs>:first-child {
    line-height: 20px;
    width: 20px;
    font-size: 1.2em
}
.btn-social-icon {
    position: relative;
    padding-left: 44px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    height: 34px;
    width: 34px;
    padding: 0
}
.btn-social-icon>:first-child {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 32px;
    line-height: 34px;
    font-size: 1.6em;
    text-align: center;
    border-right: 1px solid rgba(0, 0, 0, 0.2)
}
.btn-social-icon.btn-lg {
    padding-left: 61px
}
.btn-social-icon.btn-lg>:first-child {
    line-height: 45px;
    width: 45px;
    font-size: 1.8em
}
.btn-social-icon.btn-sm {
    padding-left: 38px
}
.btn-social-icon.btn-sm>:first-child {
    line-height: 28px;
    width: 28px;
    font-size: 1.4em
}
.btn-social-icon.btn-xs {
    padding-left: 30px
}
.btn-social-icon.btn-xs>:first-child {
    line-height: 20px;
    width: 20px;
    font-size: 1.2em
}
.btn-social-icon>:first-child {
    border: none;
    text-align: center;
    width: 100%
}
.btn-social-icon.btn-lg {
    height: 45px;
    width: 45px;
    padding-left: 0;
    padding-right: 0
}
.btn-social-icon.btn-sm {
    height: 30px;
    width: 30px;
    padding-left: 0;
    padding-right: 0
}
.btn-social-icon.btn-xs {
    height: 22px;
    width: 22px;
    padding-left: 0;
    padding-right: 0
}
.btn-adn {
    color: #fff;
    background-color: #d87a68;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-adn:focus,
.btn-adn.focus {
    color: #fff;
    background-color: #ce563f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-adn:hover {
    color: #fff;
    background-color: #ce563f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-adn:active,
.btn-adn.active,
.open>.dropdown-toggle.btn-adn {
    color: #fff;
    background-color: #ce563f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-adn:active,
.btn-adn.active,
.open>.dropdown-toggle.btn-adn {
    background-image: none
}
.btn-adn .badge {
    color: #d87a68;
    background-color: #fff
}
.btn-bitbucket {
    color: #fff;
    background-color: #205081;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-bitbucket:focus,
.btn-bitbucket.focus {
    color: #fff;
    background-color: #163758;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-bitbucket:hover {
    color: #fff;
    background-color: #163758;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-bitbucket:active,
.btn-bitbucket.active,
.open>.dropdown-toggle.btn-bitbucket {
    color: #fff;
    background-color: #163758;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-bitbucket:active,
.btn-bitbucket.active,
.open>.dropdown-toggle.btn-bitbucket {
    background-image: none
}
.btn-bitbucket .badge {
    color: #205081;
    background-color: #fff
}
.btn-dropbox {
    color: #fff;
    background-color: #1087dd;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-dropbox:focus,
.btn-dropbox.focus {
    color: #fff;
    background-color: #0d6aad;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-dropbox:hover {
    color: #fff;
    background-color: #0d6aad;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-dropbox:active,
.btn-dropbox.active,
.open>.dropdown-toggle.btn-dropbox {
    color: #fff;
    background-color: #0d6aad;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-dropbox:active,
.btn-dropbox.active,
.open>.dropdown-toggle.btn-dropbox {
    background-image: none
}
.btn-dropbox .badge {
    color: #1087dd;
    background-color: #fff
}
.btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-facebook:focus,
.btn-facebook.focus {
    color: #fff;
    background-color: #2d4373;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-facebook:hover {
    color: #fff;
    background-color: #2d4373;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-facebook:active,
.btn-facebook.active,
.open>.dropdown-toggle.btn-facebook {
    color: #fff;
    background-color: #2d4373;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-facebook:active,
.btn-facebook.active,
.open>.dropdown-toggle.btn-facebook {
    background-image: none
}
.btn-facebook .badge {
    color: #3b5998;
    background-color: #fff
}
.btn-flickr {
    color: #fff;
    background-color: #ff0084;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-flickr:focus,
.btn-flickr.focus {
    color: #fff;
    background-color: #cc006a;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-flickr:hover {
    color: #fff;
    background-color: #cc006a;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-flickr:active,
.btn-flickr.active,
.open>.dropdown-toggle.btn-flickr {
    color: #fff;
    background-color: #cc006a;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-flickr:active,
.btn-flickr.active,
.open>.dropdown-toggle.btn-flickr {
    background-image: none
}
.btn-flickr .badge {
    color: #ff0084;
    background-color: #fff
}
.btn-foursquare {
    color: #fff;
    background-color: #f94877;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-foursquare:focus,
.btn-foursquare.focus {
    color: #fff;
    background-color: #f71752;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-foursquare:hover {
    color: #fff;
    background-color: #f71752;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-foursquare:active,
.btn-foursquare.active,
.open>.dropdown-toggle.btn-foursquare {
    color: #fff;
    background-color: #f71752;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-foursquare:active,
.btn-foursquare.active,
.open>.dropdown-toggle.btn-foursquare {
    background-image: none
}
.btn-foursquare .badge {
    color: #f94877;
    background-color: #fff
}
.btn-github {
    color: #fff;
    background-color: #444;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-github:focus,
.btn-github.focus {
    color: #fff;
    background-color: #2b2b2b;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-github:hover {
    color: #fff;
    background-color: #2b2b2b;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-github:active,
.btn-github.active,
.open>.dropdown-toggle.btn-github {
    color: #fff;
    background-color: #2b2b2b;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-github:active,
.btn-github.active,
.open>.dropdown-toggle.btn-github {
    background-image: none
}
.btn-github .badge {
    color: #444;
    background-color: #fff
}
.btn-google {
    color: #fff;
    background-color: #dd4b39;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-google:focus,
.btn-google.focus {
    color: #fff;
    background-color: #c23321;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-google:hover {
    color: #fff;
    background-color: #c23321;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-google:active,
.btn-google.active,
.open>.dropdown-toggle.btn-google {
    color: #fff;
    background-color: #c23321;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-google:active,
.btn-google.active,
.open>.dropdown-toggle.btn-google {
    background-image: none
}
.btn-google .badge {
    color: #dd4b39;
    background-color: #fff
}
.btn-instagram {
    color: #fff;
    background-color: #3f729b;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-instagram:focus,
.btn-instagram.focus {
    color: #fff;
    background-color: #305777;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-instagram:hover {
    color: #fff;
    background-color: #305777;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-instagram:active,
.btn-instagram.active,
.open>.dropdown-toggle.btn-instagram {
    color: #fff;
    background-color: #305777;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-instagram:active,
.btn-instagram.active,
.open>.dropdown-toggle.btn-instagram {
    background-image: none
}
.btn-instagram .badge {
    color: #3f729b;
    background-color: #fff
}
.btn-linkedin {
    color: #fff;
    background-color: #007bb6;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-linkedin:focus,
.btn-linkedin.focus {
    color: #fff;
    background-color: #005983;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-linkedin:hover {
    color: #fff;
    background-color: #005983;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-linkedin:active,
.btn-linkedin.active,
.open>.dropdown-toggle.btn-linkedin {
    color: #fff;
    background-color: #005983;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-linkedin:active,
.btn-linkedin.active,
.open>.dropdown-toggle.btn-linkedin {
    background-image: none
}
.btn-linkedin .badge {
    color: #007bb6;
    background-color: #fff
}
.btn-microsoft {
    color: #fff;
    background-color: #2672ec;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-microsoft:focus,
.btn-microsoft.focus {
    color: #fff;
    background-color: #125acd;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-microsoft:hover {
    color: #fff;
    background-color: #125acd;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-microsoft:active,
.btn-microsoft.active,
.open>.dropdown-toggle.btn-microsoft {
    color: #fff;
    background-color: #125acd;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-microsoft:active,
.btn-microsoft.active,
.open>.dropdown-toggle.btn-microsoft {
    background-image: none
}
.btn-microsoft .badge {
    color: #2672ec;
    background-color: #fff
}
.btn-openid {
    color: #fff;
    background-color: #f7931e;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-openid:focus,
.btn-openid.focus {
    color: #fff;
    background-color: #da7908;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-openid:hover {
    color: #fff;
    background-color: #da7908;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-openid:active,
.btn-openid.active,
.open>.dropdown-toggle.btn-openid {
    color: #fff;
    background-color: #da7908;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-openid:active,
.btn-openid.active,
.open>.dropdown-toggle.btn-openid {
    background-image: none
}
.btn-openid .badge {
    color: #f7931e;
    background-color: #fff
}
.btn-pinterest {
    color: #fff;
    background-color: #cb2027;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-pinterest:focus,
.btn-pinterest.focus {
    color: #fff;
    background-color: #9f191f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-pinterest:hover {
    color: #fff;
    background-color: #9f191f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-pinterest:active,
.btn-pinterest.active,
.open>.dropdown-toggle.btn-pinterest {
    color: #fff;
    background-color: #9f191f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-pinterest:active,
.btn-pinterest.active,
.open>.dropdown-toggle.btn-pinterest {
    background-image: none
}
.btn-pinterest .badge {
    color: #cb2027;
    background-color: #fff
}
.btn-reddit {
    color: #000;
    background-color: #eff7ff;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-reddit:focus,
.btn-reddit.focus {
    color: #000;
    background-color: #bcddff;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-reddit:hover {
    color: #000;
    background-color: #bcddff;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-reddit:active,
.btn-reddit.active,
.open>.dropdown-toggle.btn-reddit {
    color: #000;
    background-color: #bcddff;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-reddit:active,
.btn-reddit.active,
.open>.dropdown-toggle.btn-reddit {
    background-image: none
}
.btn-reddit .badge {
    color: #eff7ff;
    background-color: #000
}
.btn-soundcloud {
    color: #fff;
    background-color: #f50;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-soundcloud:focus,
.btn-soundcloud.focus {
    color: #fff;
    background-color: #c40;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-soundcloud:hover {
    color: #fff;
    background-color: #c40;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-soundcloud:active,
.btn-soundcloud.active,
.open>.dropdown-toggle.btn-soundcloud {
    color: #fff;
    background-color: #c40;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-soundcloud:active,
.btn-soundcloud.active,
.open>.dropdown-toggle.btn-soundcloud {
    background-image: none
}
.btn-soundcloud .badge {
    color: #f50;
    background-color: #fff
}
.btn-tumblr {
    color: #fff;
    background-color: #2c4762;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-tumblr:focus,
.btn-tumblr.focus {
    color: #fff;
    background-color: #1c2d3f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-tumblr:hover {
    color: #fff;
    background-color: #1c2d3f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-tumblr:active,
.btn-tumblr.active,
.open>.dropdown-toggle.btn-tumblr {
    color: #fff;
    background-color: #1c2d3f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-tumblr:active,
.btn-tumblr.active,
.open>.dropdown-toggle.btn-tumblr {
    background-image: none
}
.btn-tumblr .badge {
    color: #2c4762;
    background-color: #fff
}
.btn-twitter {
    color: #fff;
    background-color: #55acee;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-twitter:focus,
.btn-twitter.focus {
    color: #fff;
    background-color: #2795e9;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-twitter:hover {
    color: #fff;
    background-color: #2795e9;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-twitter:active,
.btn-twitter.active,
.open>.dropdown-toggle.btn-twitter {
    color: #fff;
    background-color: #2795e9;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-twitter:active,
.btn-twitter.active,
.open>.dropdown-toggle.btn-twitter {
    background-image: none
}
.btn-twitter .badge {
    color: #55acee;
    background-color: #fff
}
.btn-vimeo {
    color: #fff;
    background-color: #1ab7ea;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-vimeo:focus,
.btn-vimeo.focus {
    color: #fff;
    background-color: #1295bf;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-vimeo:hover {
    color: #fff;
    background-color: #1295bf;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-vimeo:active,
.btn-vimeo.active,
.open>.dropdown-toggle.btn-vimeo {
    color: #fff;
    background-color: #1295bf;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-vimeo:active,
.btn-vimeo.active,
.open>.dropdown-toggle.btn-vimeo {
    background-image: none
}
.btn-vimeo .badge {
    color: #1ab7ea;
    background-color: #fff
}
.btn-vk {
    color: #fff;
    background-color: #587ea3;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-vk:focus,
.btn-vk.focus {
    color: #fff;
    background-color: #466482;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-vk:hover {
    color: #fff;
    background-color: #466482;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-vk:active,
.btn-vk.active,
.open>.dropdown-toggle.btn-vk {
    color: #fff;
    background-color: #466482;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-vk:active,
.btn-vk.active,
.open>.dropdown-toggle.btn-vk {
    background-image: none
}
.btn-vk .badge {
    color: #587ea3;
    background-color: #fff
}
.btn-yahoo {
    color: #fff;
    background-color: #720e9e;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-yahoo:focus,
.btn-yahoo.focus {
    color: #fff;
    background-color: #500a6f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-yahoo:hover {
    color: #fff;
    background-color: #500a6f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-yahoo:active,
.btn-yahoo.active,
.open>.dropdown-toggle.btn-yahoo {
    color: #fff;
    background-color: #500a6f;
    border-color: rgba(0, 0, 0, 0.2)
}
.btn-yahoo:active,
.btn-yahoo.active,
.open>.dropdown-toggle.btn-yahoo {
    background-image: none
}
.btn-yahoo .badge {
    color: #720e9e;
    background-color: #fff
}
.fc-button {
    background: #f4f4f4;
    background-image: none;
    color: #444;
    border-color: #ddd;
    border-bottom-color: #ddd
}
.fc-button:hover,
.fc-button:active,
.fc-button.hover {
    background-color: #e9e9e9
}
.fc-header-title h2 {
    font-size: 15px;
    line-height: 1.6em;
    color: #666;
    margin-left: 10px
}
.fc-header-right {
    padding-right: 10px
}
.fc-header-left {
    padding-left: 10px
}
.fc-widget-header {
    background: #fafafa
}
.fc-grid {
    width: 100%;
    border: 0
}
.fc-widget-header:first-of-type,
.fc-widget-content:first-of-type {
    border-left: 0;
    border-right: 0
}
.fc-widget-header:last-of-type,
.fc-widget-content:last-of-type {
    border-right: 0
}
.fc-toolbar {
    padding: 10px;
    margin: 0
}
.fc-day-number {
    font-size: 20px;
    font-weight: 300;
    padding-right: 10px
}
.fc-color-picker {
    list-style: none;
    margin: 0;
    padding: 0
}
.fc-color-picker>li {
    float: left;
    font-size: 30px;
    margin-right: 5px;
    line-height: 30px
}
.fc-color-picker>li .fa {
    -webkit-transition: -webkit-transform linear .3s;
    -moz-transition: -moz-transform linear .3s;
    -o-transition: -o-transform linear .3s;
    transition: transform linear .3s
}
.fc-color-picker>li .fa:hover {
    -webkit-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    -o-transform: rotate(30deg);
    transform: rotate(30deg)
}
#add-new-event {
    -webkit-transition: all linear .3s;
    -o-transition: all linear .3s;
    transition: all linear .3s
}
.external-event {
    padding: 5px 10px;
    font-weight: bold;
    margin-bottom: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    cursor: move
}
.external-event:hover {
    box-shadow: inset 0 0 90px rgba(0, 0, 0, 0.2)
}
.select2-container--default.select2-container--focus,
.select2-selection.select2-container--focus,
.select2-container--default:focus,
.select2-selection:focus,
.select2-container--default:active,
.select2-selection:active {
    outline: none
}
.select2-container--default .select2-selection--single,
.select2-selection .select2-selection--single {
    border: 1px solid #d2d6de;
    border-radius: 0;
    padding: 6px 12px;
    height: 34px
}
.select2-container--default.select2-container--open {
    border-color: #3c8dbc
}
.select2-dropdown {
    border: 1px solid #d2d6de;
    border-radius: 0
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #3c8dbc;
    color: white
}
.select2-results__option {
    padding: 6px 12px;
    user-select: none;
    -webkit-user-select: none
}
.select2-container .select2-selection--single .select2-selection__rendered {
    padding-left: 0;
    padding-right: 0;
    height: auto;
    margin-top: -4px
}
.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
    padding-right: 6px;
    padding-left: 20px
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 28px;
    right: 3px
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    margin-top: 0
}
.select2-dropdown .select2-search__field,
.select2-search--inline .select2-search__field {
    border: 1px solid #d2d6de
}
.select2-dropdown .select2-search__field:focus,
.select2-search--inline .select2-search__field:focus {
    outline: none
}
.select2-container--default.select2-container--focus .select2-selection--multiple,
.select2-container--default .select2-search--dropdown .select2-search__field {
    border-color: #3c8dbc !important
}
.select2-container--default .select2-results__option[aria-disabled=true] {
    color: #999
}
.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #ddd
}
.select2-container--default .select2-results__option[aria-selected=true],
.select2-container--default .select2-results__option[aria-selected=true]:hover {
    color: #444
}
.select2-container--default .select2-selection--multiple {
    border: 1px solid #d2d6de;
    border-radius: 0
}
.select2-container--default .select2-selection--multiple:focus {
    border-color: #3c8dbc
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border-color: #d2d6de
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #3c8dbc;
    border-color: #367fa9;
    padding: 1px 10px;
    color: #fff
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    margin-right: 5px;
    color: rgba(255, 255, 255, 0.7)
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #fff
}
.select2-container .select2-selection--single .select2-selection__rendered {
    padding-right: 10px
}
.box .datepicker-inline,
.box .datepicker-inline .datepicker-days,
.box .datepicker-inline>table,
.box .datepicker-inline .datepicker-days>table {
    width: 100%
}
.box .datepicker-inline td:hover,
.box .datepicker-inline .datepicker-days td:hover,
.box .datepicker-inline>table td:hover,
.box .datepicker-inline .datepicker-days>table td:hover {
    background-color: rgba(255, 255, 255, 0.3)
}
.box .datepicker-inline td.day.old,
.box .datepicker-inline .datepicker-days td.day.old,
.box .datepicker-inline>table td.day.old,
.box .datepicker-inline .datepicker-days>table td.day.old,
.box .datepicker-inline td.day.new,
.box .datepicker-inline .datepicker-days td.day.new,
.box .datepicker-inline>table td.day.new,
.box .datepicker-inline .datepicker-days>table td.day.new {
    color: #777
}
.pad {
    padding: 10px
}
.margin {
    margin: 10px
}
.margin-bottom {
    margin-bottom: 20px
}
.margin-bottom-none {
    margin-bottom: 0
}
.margin-r-5 {
    margin-right: 5px
}
.inline {
    display: inline
}
.description-block {
    display: block;
    margin: 10px 0;
    text-align: center
}
.description-block.margin-bottom {
    margin-bottom: 25px
}
.description-block>.description-header {
    margin: 0;
    padding: 0;
    font-weight: 600;
    font-size: 16px
}
.description-block>.description-text {
    text-transform: uppercase
}
.bg-red,
.bg-yellow,
.bg-aqua,
.bg-blue,
.bg-light-blue,
.bg-green,
.bg-navy,
.bg-teal,
.bg-olive,
.bg-lime,
.bg-orange,
.bg-fuchsia,
.bg-purple,
.bg-maroon,
.bg-black,
.bg-red-active,
.bg-yellow-active,
.bg-aqua-active,
.bg-blue-active,
.bg-light-blue-active,
.bg-green-active,
.bg-navy-active,
.bg-teal-active,
.bg-olive-active,
.bg-lime-active,
.bg-orange-active,
.bg-fuchsia-active,
.bg-purple-active,
.bg-maroon-active,
.bg-black-active,
.callout.callout-danger,
.callout.callout-warning,
.callout.callout-info,
.callout.callout-success,
.alert-success,
.alert-danger,
.alert-error,
.alert-warning,
.alert-info,
.label-danger,
.label-info,
.label-warning,
.label-primary,
.label-success,
.modal-primary .modal-body,
.modal-primary .modal-header,
.modal-primary .modal-footer,
.modal-warning .modal-body,
.modal-warning .modal-header,
.modal-warning .modal-footer,
.modal-info .modal-body,
.modal-info .modal-header,
.modal-info .modal-footer,
.modal-success .modal-body,
.modal-success .modal-header,
.modal-success .modal-footer,
.modal-danger .modal-body,
.modal-danger .modal-header,
.modal-danger .modal-footer {
    color: #fff !important
}
.bg-gray {
    color: #000;
    background-color: #d2d6de !important
}
.bg-gray-light {
    background-color: #f7f7f7
}
.bg-black {
    background-color: #111 !important
}
.bg-red,
.callout.callout-danger,

.alert-error,
.label-danger,
.modal-danger .modal-body {
    background-color: #dd4b39 !important
}
.bg-yellow,
.callout.callout-warning,
.alert-warning,
.label-warning,
.modal-warning .modal-body {
    background-color: #f39c12 !important
}
.bg-aqua,
.callout.callout-info,
.alert-info,
.label-info,
.modal-info .modal-body {
    background-color: #00c0ef !important
}
.bg-blue {
    background-color: #0073b7 !important
}
.bg-light-blue,
.label-primary,
.modal-primary .modal-body {
    background-color: #3c8dbc !important
}
.bg-green,
.callout.callout-success,
.alert-success,
.label-success,
.modal-success .modal-body {
    background-color: #00a65a !important
}
.bg-navy {
    background-color: #001f3f !important
}
.bg-teal {
    background-color: #39cccc !important
}
.bg-olive {
    background-color: #3d9970 !important
}
.bg-lime {
    background-color: #01ff70 !important
}
.bg-orange {
    background-color: #ff851b !important
}
.bg-fuchsia {
    background-color: #f012be !important
}
.bg-purple {
    background-color: #605ca8 !important
}
.bg-maroon {
    background-color: #d81b60 !important
}
.bg-gray-active {
    color: #000;
    background-color: #b5bbc8 !important
}
.bg-black-active {
    background-color: #000 !important
}
.bg-red-active,
.modal-danger .modal-header,
.modal-danger .modal-footer {
    background-color: #d33724 !important
}
.bg-yellow-active,
.modal-warning .modal-header,
.modal-warning .modal-footer {
    background-color: #db8b0b !important
}
.bg-aqua-active,
.modal-info .modal-header,
.modal-info .modal-footer {
    background-color: #00a7d0 !important
}
.bg-blue-active {
    background-color: #005384 !important
}
.bg-light-blue-active,
.modal-primary .modal-header,
.modal-primary .modal-footer {
    background-color: #357ca5 !important
}
.bg-green-active,
.modal-success .modal-header,
.modal-success .modal-footer {
    background-color: #008d4c !important
}
.bg-navy-active {
    background-color: #001a35 !important
}
.bg-teal-active {
    background-color: #30bbbb !important
}
.bg-olive-active {
    background-color: #368763 !important
}
.bg-lime-active {
    background-color: #00e765 !important
}
.bg-orange-active {
    background-color: #ff7701 !important
}
.bg-fuchsia-active {
    background-color: #db0ead !important
}
.bg-purple-active {
    background-color: #555299 !important
}
.bg-maroon-active {
    background-color: #ca195a !important
}
[class^="bg-"].disabled {
    opacity: .65;
    filter: alpha(opacity=65)
}
.text-red {
    color: #dd4b39 !important
}
.text-yellow {
    color: #f39c12 !important
}
.text-aqua {
    color: #00c0ef !important
}
.text-blue {
    color: #0073b7 !important
}
.text-black {
    color: #111 !important
}
.text-light-blue {
    color: #3c8dbc !important
}
.text-green {
    color: #00a65a !important
}
.text-gray {
    color: #d2d6de !important
}
.text-navy {
    color: #001f3f !important
}
.text-teal {
    color: #39cccc !important
}
.text-olive {
    color: #3d9970 !important
}
.text-lime {
    color: #01ff70 !important
}
.text-orange {
    color: #ff851b !important
}
.text-fuchsia {
    color: #f012be !important
}
.text-purple {
    color: #605ca8 !important
}
.text-maroon {
    color: #d81b60 !important
}
.link-muted {
    color: #7a869d
}
.link-muted:hover,
.link-muted:focus {
    color: #606c84
}
.link-black {
    color: #666
}
.link-black:hover,
.link-black:focus {
    color: #999
}
.hide {
    display: none !important
}
.no-border {
    border: 0 !important
}
.no-padding {
    padding: 0 !important
}
.no-margin {
    margin: 0 !important
}
.no-shadow {
    box-shadow: none !important
}
.list-unstyled,
.chart-legend,
.contacts-list,
.users-list,
.mailbox-attachments {
    list-style: none;
    margin: 0;
    padding: 0
}
.list-group-unbordered>.list-group-item {
    border-left: 0;
    border-right: 0;
    border-radius: 0;
    padding-left: 0;
    padding-right: 0
}
.flat {
    border-radius: 0 !important
}
.text-bold,
.text-bold.table td,
.text-bold.table th {
    font-weight: 700
}
.text-sm {
    font-size: 12px
}
.jqstooltip {
    padding: 5px !important;
    width: auto !important;
    height: auto !important
}
.bg-teal-gradient {
    background: #39cccc !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #39cccc), color-stop(1, #7adddd)) !important;
    background: -ms-linear-gradient(bottom, #39cccc, #7adddd) !important;
    background: -moz-linear-gradient(center bottom, #39cccc 0, #7adddd 100%) !important;
    background: -o-linear-gradient(#7adddd, #39cccc) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#7adddd', endColorstr='#39cccc', GradientType=0) !important;
    color: #fff
}
.bg-light-blue-gradient {
    background: #3c8dbc !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #3c8dbc), color-stop(1, #67a8ce)) !important;
    background: -ms-linear-gradient(bottom, #3c8dbc, #67a8ce) !important;
    background: -moz-linear-gradient(center bottom, #3c8dbc 0, #67a8ce 100%) !important;
    background: -o-linear-gradient(#67a8ce, #3c8dbc) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#67a8ce', endColorstr='#3c8dbc', GradientType=0) !important;
    color: #fff
}
.bg-blue-gradient {
    background: #0073b7 !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #0073b7), color-stop(1, #0089db)) !important;
    background: -ms-linear-gradient(bottom, #0073b7, #0089db) !important;
    background: -moz-linear-gradient(center bottom, #0073b7 0, #0089db 100%) !important;
    background: -o-linear-gradient(#0089db, #0073b7) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#0089db', endColorstr='#0073b7', GradientType=0) !important;
    color: #fff
}
.bg-aqua-gradient {
    background: #00c0ef !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #00c0ef), color-stop(1, #14d1ff)) !important;
    background: -ms-linear-gradient(bottom, #00c0ef, #14d1ff) !important;
    background: -moz-linear-gradient(center bottom, #00c0ef 0, #14d1ff 100%) !important;
    background: -o-linear-gradient(#14d1ff, #00c0ef) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#14d1ff', endColorstr='#00c0ef', GradientType=0) !important;
    color: #fff
}
.bg-yellow-gradient {
    background: #f39c12 !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f39c12), color-stop(1, #f7bc60)) !important;
    background: -ms-linear-gradient(bottom, #f39c12, #f7bc60) !important;
    background: -moz-linear-gradient(center bottom, #f39c12 0, #f7bc60 100%) !important;
    background: -o-linear-gradient(#f7bc60, #f39c12) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#f7bc60', endColorstr='#f39c12', GradientType=0) !important;
    color: #fff
}
.bg-purple-gradient {
    background: #605ca8 !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #605ca8), color-stop(1, #9491c4)) !important;
    background: -ms-linear-gradient(bottom, #605ca8, #9491c4) !important;
    background: -moz-linear-gradient(center bottom, #605ca8 0, #9491c4 100%) !important;
    background: -o-linear-gradient(#9491c4, #605ca8) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#9491c4', endColorstr='#605ca8', GradientType=0) !important;
    color: #fff
}
.bg-green-gradient {
    background: #00a65a !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #00a65a), color-stop(1, #00ca6d)) !important;
    background: -ms-linear-gradient(bottom, #00a65a, #00ca6d) !important;
    background: -moz-linear-gradient(center bottom, #00a65a 0, #00ca6d 100%) !important;
    background: -o-linear-gradient(#00ca6d, #00a65a) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00ca6d', endColorstr='#00a65a', GradientType=0) !important;
    color: #fff
}
.bg-red-gradient {
    background: #dd4b39 !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #dd4b39), color-stop(1, #e47365)) !important;
    background: -ms-linear-gradient(bottom, #dd4b39, #e47365) !important;
    background: -moz-linear-gradient(center bottom, #dd4b39 0, #e47365 100%) !important;
    background: -o-linear-gradient(#e47365, #dd4b39) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#e47365', endColorstr='#dd4b39', GradientType=0) !important;
    color: #fff
}
.bg-black-gradient {
    background: #111 !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #111), color-stop(1, #2b2b2b)) !important;
    background: -ms-linear-gradient(bottom, #111, #2b2b2b) !important;
    background: -moz-linear-gradient(center bottom, #111 0, #2b2b2b 100%) !important;
    background: -o-linear-gradient(#2b2b2b, #111) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#2b2b2b', endColorstr='#111111', GradientType=0) !important;
    color: #fff
}
.bg-maroon-gradient {
    background: #d81b60 !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #d81b60), color-stop(1, #e73f7c)) !important;
    background: -ms-linear-gradient(bottom, #d81b60, #e73f7c) !important;
    background: -moz-linear-gradient(center bottom, #d81b60 0, #e73f7c 100%) !important;
    background: -o-linear-gradient(#e73f7c, #d81b60) !important;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#e73f7c', endColorstr='#d81b60', GradientType=0) !important;
    color: #fff
}
.description-block .description-icon {
    font-size: 16px
}
.no-pad-top {
    padding-top: 0
}
.position-static {
    position: static !important
}
.list-header {
    font-size: 15px;
    padding: 10px 4px;
    font-weight: bold;
    color: #666
}
.list-seperator {
    height: 1px;
    background: #f4f4f4;
    margin: 15px 0 9px 0
}
.list-link>a {
    padding: 4px;
    color: #777
}
.list-link>a:hover {
    color: #222
}
.font-light {
    font-weight: 300
}
.user-block:before,
.user-block:after {
    content: " ";
    display: table
}
.user-block:after {
    clear: both
}
.user-block img {
    width: 40px;
    height: 40px;
    float: left
}
.user-block .username,
.user-block .description,
.user-block .comment {
    display: block;
    margin-left: 50px
}
.user-block .username {
    font-size: 16px;
    font-weight: 600
}
.user-block .description {
    color: #999;
    font-size: 13px
}
.user-block.user-block-sm .username,
.user-block.user-block-sm .description,
.user-block.user-block-sm .comment {
    margin-left: 40px
}
.user-block.user-block-sm .username {
    font-size: 14px
}
.img-sm,
.img-md,
.img-lg,
.box-comments .box-comment img,
.user-block.user-block-sm img {
    float: left
}
.img-sm,
.box-comments .box-comment img,
.user-block.user-block-sm img {
    width: 30px !important;
    height: 30px !important
}
.img-sm+.img-push {
    margin-left: 40px
}
.img-md {
    width: 60px;
    height: 60px
}
.img-md+.img-push {
    margin-left: 70px
}
.img-lg {
    width: 100px;
    height: 100px
}
.img-lg+.img-push {
    margin-left: 110px
}
.img-bordered {
    border: 3px solid #d2d6de;
    padding: 3px
}
.img-bordered-sm {
    border: 2px solid #d2d6de;
    padding: 2px
}
.attachment-block {
    border: 1px solid #f4f4f4;
    padding: 5px;
    margin-bottom: 10px;
    background: #f7f7f7
}
.attachment-block .attachment-img {
    max-width: 100px;
    max-height: 100px;
    height: auto;
    float: left
}
.attachment-block .attachment-pushed {
    margin-left: 110px
}
.attachment-block .attachment-heading {
    margin: 0
}
.attachment-block .attachment-text {
    color: #555
}
.connectedSortable {
    min-height: 100px
}
.ui-helper-hidden-accessible {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px
}
.sort-highlight {
    background: #f4f4f4;
    border: 1px dashed #ddd;
    margin-bottom: 10px
}
.full-opacity-hover {
    opacity: .65;
    filter: alpha(opacity=65)
}
.full-opacity-hover:hover {
    opacity: 1;
    filter: alpha(opacity=100)
}
.chart {
    position: relative;
    overflow: hidden;
    width: 100%
}
.chart svg,
.chart canvas {
    width: 100% !important
}
@media print {
    .no-print,
    .main-sidebar,
    .left-side,
    .main-header,
    .content-header {
        display: none !important
    }
    .content-wrapper,
    .right-side,
    .main-footer {
        margin-left: 0 !important;
        min-height: 0 !important;
        -webkit-transform: translate(0, 0) !important;
        -ms-transform: translate(0, 0) !important;
        -o-transform: translate(0, 0) !important;
        transform: translate(0, 0) !important
    }
    .fixed .content-wrapper,
    .fixed .right-side {
        padding-top: 0 !important
    }
    .invoice {
        width: 100%;
        border: 0;
        margin: 0;
        padding: 0
    }
    .invoice-col {
        float: left;
        width: 33.3333333%
    }
    .table-responsive {
        overflow: auto
    }
    .table-responsive>.table tr th,
    .table-responsive>.table tr td {
        white-space: normal !important
    }
}
	
	
	
	
	
	
	
	
	
	
	
	
	

/*** RADIAL PROGRESS ***/
/* Circumference = 2πr */
/* π = 3.1415926535898 */
/* r = 35 */

svg.radial-progress {
  height: auto;
  max-width: 177px;
  padding: 1em;
  transform: rotate(-90deg);
  width: 100%;
  margin-top:40px;
}

svg.radial-progress circle {
  fill: rgba(0,0,0,0);
  stroke: #fff;
  stroke-dashoffset: 219.91148575129; /* Circumference */
  stroke-width: 10;
}

svg.radial-progress circle.incomplete { 


    opacity: 0.40;
    stroke: #1abc9c;
    stroke: #bdc3c7 !important;
 }

svg.radial-progress circle.complete { stroke-dasharray: 219.91148575129; /* Circumference */ }

svg.radial-progress text {
  /*fill: #fff;*/
  font: 400 1em/1 'Oswald', sans-serif;
  text-anchor: middle;
}





/*** COLORS ***/
/* Primary */

svg.radial-progress:nth-of-type(6n+1) circle { stroke: #1abc9c; }

/* Secondary */

svg.radial-progress:nth-of-type(6n+2) circle { stroke: #8e44ad; }

/* Tertiary */

svg.radial-progress:nth-of-type(6n+3) circle { stroke: #e74c3c; }

/* Quaternary */

svg.radial-progress:nth-of-type(6n+4) circle { stroke: #fca858; }

/* Quinary */

svg.radial-progress:nth-of-type(6n+5) circle { stroke: #fddc32; }
.layout-boxed html,
.layout-boxed body {
    height: 100%
}





#hidealert{
	display:none;
}

	
</style>


<style>
	.skillbar {
	position:relative;
	display:block;
	    margin-bottom: 37px;
	width:100%;
	background:lightgrey;
	height:35px;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	-webkit-transition:0.4s linear;
	-moz-transition:0.4s linear;
	-ms-transition:0.4s linear;
	-o-transition:0.4s linear;
	transition:0.4s linear;
	-webkit-transition-property:width, background-color;
	-moz-transition-property:width, background-color;
	-ms-transition-property:width, background-color;
	-o-transition-property:width, background-color;
	transition-property:width, background-color;
}

.skillbar-title {
	position:absolute;
	top:0;
	left:0;
/* width:110px; */
width:249px;
	font-weight:bold;
	font-size:13px;
	color:#ffffff;
/* 	background:#6adcfa; */
	background:transparent !important;
	-webkit-border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-topleft:3px;
	-moz-border-radius-bottomleft:3px;
	border-top-left-radius:3px;
	border-bottom-left-radius:3px;
}

.skillbar-title span {
	display:block;
	color: black;
	background:rgba(0, 0, 0, 0.1);
	padding:0 20px;
	height:35px;
	line-height:35px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:3px;
	-moz-border-radius-topleft:3px;
	-moz-border-radius-bottomleft:3px;
	border-top-left-radius:3px;
	border-bottom-left-radius:3px;
}

.skillbar-bar {
	height:35px;
	width:0px;
	background:#6adcfa;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}

.skill-bar-percent {
	position:absolute;
	right:10px;
	top:0;
	font-size:15px;
	height:35px;
	    font-weight: bold;
	line-height:35px;
color: dimgrey;
}
	
	#groupgraph{
		
		    background: white;
  
    padding-left: 3%;
   
    padding-right: 3%;
    margin-right: 1%;
	width:49%;
	}
	</style>
	
	
	
	
	<div class="container-fluid"id="login">

 <div class="container">
  <ul class="w3lsg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		
 <?php 
$logged_in=$this->session->userdata('logged_in');
?>
<div class="row">

 
<div class="row"></div>

  <div class="row">
 
<div class="col-md-12">

<div class="col-md-12 mb50"><br>
<h3 style="color:white;"class="mb50 fontbold">Dashboard</h3>



<div class="container">


 <div class="row" style="margin-top: 1%;">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $num_quiz;?></h3>

              <p>Active Test</p>
            </div>
            <div class="icon">
              <i class="fa fa-list" style="font-size: 67px;margin-top: 47%;"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/quiz" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $num_users;?></h3>

           <!--  <p>Test Taken</p> -->
          <p>Number Of Users</p> 
            </div>
            <div class="icon">
              <i class="fa fa-users" style="font-size: 67px;margin-top: 47%;"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $num_qbank;?></h3>

            <!--  <p>Pending Result</p>-->
              <p>Number of Questions</p>
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o" style="font-size: 67px;margin-top: 47%;"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/qbank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $get_user_active_test_attempt;?></h3>

              <p>No of Attempt</p>
            </div>
            <div class="icon">
              <i class="fa fa-bar-chart" style="font-size: 67px;margin-top: 47%;"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/result" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


  <div class="row">
 
<div class="col-md-12">
<br><br>
<div class="col-md-12 mb50">

<div class="row">
<div class="col-xs-6" id="groupgraph">
	
	<h2 style="text-align:center;    margin-bottom: 32px;">Group Performance</h2>

	
	<!--  $res[0]['maxcount']<=======> $first_per=($res[0]['maxcount'] / $f_gid_count)*100; --> 
	
<div class="skillbar clearfix " data-percent="<?php $first_per=($res[0]['maxcount'] / $f_gid_count)*100; echo round($first_per);?>%">

	<div class="skillbar-title" style="background: #46465e;"><span><?php echo $first_grp;?></span></div>
	<div class="skillbar-bar" style="background: #8e44ad;"></div>
	<div class="skill-bar-percent"><?php $first_per=($res[0]['maxcount'] / $f_gid_count)*100; 
	echo round($first_per);?>%</div>
</div> <!-- End Skill Bar -->


<div class="skillbar clearfix " data-percent="<?php $second_per=($res[1]['maxcount'] / $s_gid_count)*100; 
echo round($second_per);?>%">
	<div class="skillbar-title" style="background: #46465e;"><span><?php echo $second_grp;?></span></div>
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent"><?php $second_per=($res[1]['maxcount'] / $s_gid_count)*100; echo round($second_per);?>%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="<?php $third_per=($res[2]['maxcount'] / $t_gid_count)*100; echo round($third_per);?>%">
	<div class="skillbar-title" style="background: #46465e;"><span><?php echo $third_grp;?></span></div>
	<div class="skillbar-bar" style="background: #e74c3c;"></div>
	<div class="skill-bar-percent"><?php $third_per=($res[2]['maxcount'] / $t_gid_count)*100; echo round($third_per);?>%</div>
</div> <!-- End Skill Bar -->

	
	
	
	<script>
	jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},2000);
	});
});
	
	</script>
	
	
	
	
	
	
	
	
<!--	<div id="chart_div" style="margin-top:0px;width: 550px !important; height: 300px;float:left;">  
	 </div>-->
	

</div>
<div class="col-md-6" id="rad_graph" style="height:300px;background-color:white;">
<svg class="radial-progress" data-percentage="<?php echo $pass_per;?>" viewBox="0 0 80 80">
    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 63.774330867872806;"></circle>
    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"><?php echo round($pass_per);?>%</text>
    </svg> 

  <svg class="radial-progress" data-percentage="<?php echo $fail_per;?>" viewBox="0 0 80 80" >
    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"><?php echo round($fail_per);?>%</text>

    </svg> 		
		<svg class="radial-progress" data-percentage="<?php echo round($get_user_max_mark[0]['max_per']);?>" viewBox="0 0 80 80">
    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 147.3406954533613;"></circle>
    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"><?php echo round($get_user_max_mark[0]['max_per']).'%';?></text>
    </svg> 

	

	
<ul>
<li style="float:left;">Pass Percentage</li>
<li style="float:left;    margin-left: 14%;">Fail Percentage</li>
<li style="float:left;    margin-left: 20%;">Highest Score</li>

</ul>

	</div>	
</div>

	
	</div>	
</div>	
		 
<br> 
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		<?php 
		if($logged_in['su']=='1'){
			?>
				<div class='alert alert-danger' id="hidealert"><?php echo $this->lang->line('pending_message_admin');?></div>		
		<?php 
		}
		?>

</div>

</div>


<script type="text/javascript" src="<?php echo base_url();?>js/google.js"></script>
  


















	<!--<div class="col-md-6">
	 <div id="chartContainer" style="height: 380px; width: 100%;"> </div>
	</div>
	<div class="col-md-6">
		<div id="chartContainer2" style="height: 380px; width: 100%;"></div>
	</div>	-->
	
	
	
	
	
</div>	
		 
<br> 
<br> 
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
		
		
		<?php 
		if($logged_in['su']=='1'){
			?>
				<div style="color:white;margin-top: 53%;"class='alert alert-danger' ><?php echo $this->lang->line('pending_message_admin');?></div>		
		<?php 
		}
		?>
		
		
		
		
<!--<table class="table table-bordered" style="margin-top:60px; margin-bottom:50px; float:left;color:white;">
<tr>
 <th><?php echo $this->lang->line('result_id');?></th>
<th><?php echo $this->lang->line('first_name');?> <?php echo $this->lang->line('last_name');?></th>
 <th><?php echo $this->lang->line('quiz_name');?></th>
 <th><?php echo $this->lang->line('status');?>
 <select style="color:black;"onChange="sort_result('<?php echo $limit;?>',this.value);">
 <option value="0"><?php echo $this->lang->line('all');?></option>
 <option value="<?php echo $this->lang->line('pass');?>" <?php if($status==$this->lang->line('pass')){ echo 'selected'; } ?> ><?php echo $this->lang->line('pass');?></option>
 <option value="<?php echo $this->lang->line('fail');?>" <?php if($status==$this->lang->line('fail')){ echo 'selected'; } ?> ><?php echo $this->lang->line('fail');?></option>
 <option value="<?php echo $this->lang->line('pending');?>" <?php if($status==$this->lang->line('pending')){ echo 'selected'; } ?> ><?php echo $this->lang->line('pending');?></option>
 </select>
 </th>
 <th><?php echo $this->lang->line('percentage_obtained');?></th>
<th><?php echo $this->lang->line('action');?> </th>
</tr>
<?php 
if(count($test_result)==0){
	?>
<tr>
 <td colspan="6"><?php echo $this->lang->line('no_record_found');?></td>
</tr>	
	
	
	<?php
}
$j=1;
foreach($test_result as $key => $val){
?>
<tr>
 <td><?php echo $j;?></td>
<td><?php echo $val['first_name'];?> <?php echo $val['last_name'];?></td>
 <td><?php echo $val['quiz_name'];?></td>
 <td><?php echo $val['result_status'];?></td>
 <td><?php echo $val['percentage_obtained'];?>%</td>
<td>
<a href="<?php echo site_url('result/view_result/'.$val['rid']);?>" class="btn btn-success" ><?php echo $this->lang->line('view');?> </a>
<?php 
if($logged_in['su']=='1'){
	?>
	<a href="javascript:remove_entry('result/remove_result/<?php echo $val['rid'];?>');"><img src="<?php echo base_url('images/cross.png');?>"></a>
<?php 
}
?>
</td>
</tr>

<?php 
$j++;
}
?>
</table>    -->
</div>

</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script>

 <script type="text/javascript">
 window.onload = function () {
	 
	 var chart = new CanvasJS.Chart("chartContainer",
   {      
     theme:"theme2",
     title:{
       //text: "Test Result",
	   fontFamily: "arial black",
	   fontWeight: "bold",
	   fontSize: "25",
	   margin: "10"
	   
     },
     animationEnabled: true,
     axisY :{
       includeZero: false,
       // suffix: " k",
       valueFormatString: "#,,.",
       //suffix: " mn"
       
     },
     toolTip: {
       shared: "true"
     },
     data: [
     {        
       type: "spline",
       showInLegend: true,
	   toolTipContent: "{name}: {y} : {name1}",
       name: "Top scores",
       // markerSize: 0,        
       // color: "rgba(54,158,173,.6)",
       dataPoints: [
	   <?php
	   foreach($test_result as $key => $val){
	   ?>
       {label: "", y: <?php echo $val['percentage_obtained']; ?>,name:"<?php echo $val['first_name']; ?>",name1:"(<?php echo $val['quiz_name']; ?>)"},
      <?php
	   }
	   ?>
       ]
     }
     

     ],
     legend:{
       cursor:"pointer",
       itemclick : function(e) {
         if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
          e.dataSeries.visible = false;
         }
         else {
           e.dataSeries.visible = true;
         }
         chart.render();
       }
       
     },
   });

chart.render();



	var chart = new CanvasJS.Chart("chartContainer2",
	{
		title:{
			//text: "Test Result",
			fontFamily: "arial black",
			fontSize: "25"
		},
                animationEnabled: true,
		legend: {
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		theme: "theme2",
		data: [
		{        
			type: "pie",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y}",
			showInLegend: true,
			/* indexLabel: "#percent%",  */
			dataPoints: [
			 <?php
	   foreach($test_result as $key => $val){
	   ?>
				{  y: <?php echo $val['percentage_obtained']; ?>, name: "<?php echo $val['quiz_name'];?>"},
	   <?php } ?>
			]
		}
		]
	});
	chart.render();




	 

}
</script>
</div>
</div>
<div class="container-fluid" >
	<footer>
	<div class="container">
	
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
                <p>&copy; 2018 Infoziant. All Rights Reserved.</p>
            </div>
			</div>
		
	</div>	
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script> 
<script>
$(function(){

    // Remove svg.radial-progress .complete inline styling
    $('svg.radial-progress').each(function( index, value ) { 
        $(this).find($('circle.complete')).removeAttr( 'style' );
    });

    // Activate progress animation on scroll
    $(window).scroll(function(){
        $('svg.radial-progress').each(function( index, value ) { 
            // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
            if ( 
                $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
            ) {
                // Get percentage of progress
                percent = $(value).data('percentage');
                // Get radius of the svg's circle.complete
                radius = $(this).find($('circle.complete')).attr('r');
                // Get circumference (2πr)
                circumference = 2 * Math.PI * radius;
                // Get stroke-dashoffset value based on the percentage of the circumference
                strokeDashOffset = circumference - ((percent * circumference) / 100);
                // Transition progress for 1.25 seconds
                $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
            }
        });
    }).trigger('scroll');

});
</script>






 
<?php

 if($value!='[["Quiz Name","Percentage (%)"]]')
	{ ?>


 <script type="text/javascript">

	  
	        google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
             var data = google.visualization.arrayToDataTable([
		   ['Quiz Name', 'Percentage (%)', { role: 'style' }],
		   	<?php
 foreach($last_ten_result as $val){
 
 ?>
 ['<?php echo $val['quiz_name'];?>', <?php echo intval($val['percentage_obtained']);?>, '<?php if($val['percentage_obtained'] >=50){ echo 'green'; } else { echo 'red'; } ?>' ],
 <?php
 }

		
		?>
		
		]);


        var options = {
          title: '<?php echo "Test Comparison";?> ',
          hAxis: {title: '<?php echo $this->lang->line('quiz');?>(<?php echo $this->lang->line('user');?>)', titleTextStyle: {color: 'red'}}
		  
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	
	
	<?php } 
	
	
	?>
	</div>
