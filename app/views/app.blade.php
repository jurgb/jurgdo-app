@extends('layout/afterlogin')


@section('title')
My perfect Destination
@stop

@section('content')
<div class="mpd-container" layout="row">
    <md-sidenav layout="column" class="md-sidenav-left md-whiteframe-z2" md-component-id="left" md-is-locked-open="$mdMedia('gt-sm')">
        <md-toolbar class="default-md-theme" layout="row">
            <h1 class="md-toolbar-tools">My perfect destination</h1>
        </md-toolbar>
        <md-list layout="column" class="muppet-list">
            <md-item ng-repeat="it in muppets">
                <md-item-content>
                    <md-button ng-click="selectMuppet(it)" ng-class="{'selected' : it === selected }">
                        <img ng-src="<% it.iconurl %>" class="face" alt="">
                        <% it.name %>
                    </md-button>
                </md-item-content>
            </md-item>
        </md-list>
    </md-sidenav>
    <div flex layout="column">
        <md-toolbar class="default-md-theme" layout="row">
            <button ng-click="toggleSidenav('left')" hide-gt-sm class="menuBtn">
            <span class="visuallyhidden">Menu</span>
            </button>
            <div class="md-toolbar-tools" layout="row" layout-align="end">
                <div role="presentation" class="dropdown nav-components">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-expanded="false">
                    <ul class="profile_banner_list">
                        <li><span class="profilepicwrapper"><img class="profilepic" src="/images/profilepics/me.png" alt="profile picture of {{Session::get('user')->firstname;}} {{Session::get('user')->name;}}"></span> 
                        </li>
                        <li class="space5">
                            {{Session::get('user')->firstname;}} {{Session::get('user')->name;}} <span class="caret"></span>
                        </li>
                    </ul></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">My profile</a></li>
                        <li><a href="#">Messages <span class="badge">3</span></a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>  
            </div>          
        </md-toolbar>
        <div layout="row" >
            <div layout="column" flex class="content-wrapper" id="primary-col">
                <md-content layout="column" flex class="md-padding" ng-repeat="dest in dests | filter:{ id : selected.id}">
                    
                    <h2><% dest.name %></h2>
                    
                </md-content>
            </div>
        </div>
    </div>
</div>
@stop