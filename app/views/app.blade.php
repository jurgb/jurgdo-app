@extends('layout/afterlogin')


@section('title')
Jurgdo-App
@stop

@section('content')
		<div ng-controller="AngTodoController" ng-init="index()">
		    <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <ul class="nav navbar-nav navbar-left">
                        <a class="navbar-brand" href="#"><img class="nav-logo" src="/images/logo.png" alt="logo jurgdo"></a>
                        <li class="dropdown">
                            <input ng-model="searchtext" class="form-control btn btn-default dropdown-toggle nav-search nav-components" placeholder="Search users" type="text" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li ng-repeat="message in notifications | filter: searchtext" role="presentation"><a role="menuitem" tabindex="-1" href="#"><% message.title %></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-components" href="/app">Homepage</a></li>
                        <li></li>
                        <li role="presentation" class="dropdown nav-components">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-expanded="false">Welkom {{Session::get('user')->firstname;}}!<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">My profile</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="content" ng-view>


            </div>
		</div>
@stop