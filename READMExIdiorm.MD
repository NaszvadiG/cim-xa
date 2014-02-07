




<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>cim-xa/idiorm/README.markdown at master · sfthurber/cim-xa</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="sfthurber/cim-xa" name="twitter:title" /><meta content="cim-xa - CIM-Accelerant [a.k.a. CIM-XA] is a distribution for the popular CodeIgniter framework, including zero-compilation object-oriented data layers [using PDO via Idiorm] and presentation layers [" name="twitter:description" /><meta content="https://2.gravatar.com/avatar/aea05369bbce1cc130861a0a99d54d74?d=https%3A%2F%2Fidenticons.github.com%2Fdefd95afafdd80ba89cbedf6986e8429.png&amp;r=x&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://2.gravatar.com/avatar/aea05369bbce1cc130861a0a99d54d74?d=https%3A%2F%2Fidenticons.github.com%2Fdefd95afafdd80ba89cbedf6986e8429.png&amp;r=x&amp;s=400" property="og:image" /><meta content="sfthurber/cim-xa" property="og:title" /><meta content="https://github.com/sfthurber/cim-xa" property="og:url" /><meta content="cim-xa - CIM-Accelerant [a.k.a. CIM-XA] is a distribution for the popular CodeIgniter framework, including zero-compilation object-oriented data layers [using PDO via Idiorm] and presentation layers [using Savant and PHPTI] as well as MongoDB support, job queue support, the Grocery CRUD, PHPExcel and  Zend libraries, all backed by ChromePHP for testing. By:" property="og:description" />

    <meta name="hostname" content="github-fe139-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 2.1.0p0-github-tcmalloc (87d8860372) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />
    


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="46AFE1D1:0718:63CBD7F:52F4F5F9" name="octolytics-dimension-request_id" /><meta content="2487479" name="octolytics-actor-id" /><meta content="sfthurber" name="octolytics-actor-login" /><meta content="7eeeba8f4df97f774adc19de17ba51a1b525206bbaf4de5b3059eed252f73a07" name="octolytics-actor-hash" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="PygUo0nq942bucPS6ZzwT5ho/f9KXjsb6QkXJBMDEh8=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-f75ad12241fc0d2d7c903870c877da49bf925f5b.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-eedb06b089d2ef792059bc2ebee160f716fa7aab.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://github.global.ssl.fastly.net/assets/frameworks-e8d62aa911c75d1d60662859d52c3cf1232675e6.js" type="text/javascript"></script>
      <script async="async" defer="defer" src="https://github.global.ssl.fastly.net/assets/github-62b15e7c9c7aead7539d1a6b7523410cfd4d33a5.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="59617e98acce9d59e36d799192b445af">

        <link data-pjax-transient rel='permalink' href='/sfthurber/cim-xa/blob/44d425a23d897da285c48ade3e866a25c94dd4ae/idiorm/README.markdown'>

  <meta name="description" content="cim-xa - CIM-Accelerant [a.k.a. CIM-XA] is a distribution for the popular CodeIgniter framework, including zero-compilation object-oriented data layers [using PDO via Idiorm] and presentation layers [using Savant and PHPTI] as well as MongoDB support, job queue support, the Grocery CRUD, PHPExcel and  Zend libraries, all backed by ChromePHP for testing. By:" />

  <meta content="2487479" name="octolytics-dimension-user_id" /><meta content="sfthurber" name="octolytics-dimension-user_login" /><meta content="16257868" name="octolytics-dimension-repository_id" /><meta content="sfthurber/cim-xa" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="16257868" name="octolytics-dimension-repository_network_root_id" /><meta content="sfthurber/cim-xa" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/sfthurber/cim-xa/commits/master.atom" rel="alternate" title="Recent Commits to cim-xa:master" type="application/atom+xml" />

  </head>


  <body class="logged_in  env-production windows vis-public page-blob">
    <div class="wrapper">
      
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    
    <a href="/notifications" class="notification-indicator tooltipped downwards" data-gotokey="n" title="You have no unread notifications">
        <span class="mail-status all-read"></span>
</a>

      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey=" s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="sfthurber"
      data-repo="sfthurber/cim-xa"
      data-branch="master"
      data-sha="20f2c2884ac4f1360b0b92cec2a5902f373c725c"
  >

    <input type="hidden" name="nwo" value="sfthurber/cim-xa" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    


  <ul id="user-links">
    <li>
      <a href="/sfthurber" class="name">
        <img alt="" height="20" src="https://0.gravatar.com/avatar/aea05369bbce1cc130861a0a99d54d74?d=https%3A%2F%2Fidenticons.github.com%2Fdefd95afafdd80ba89cbedf6986e8429.png&amp;r=x&amp;s=140" width="20" /> sfthurber
      </a>
    </li>

    <li class="new-menu dropdown-toggle js-menu-container">
      <a href="#" class="js-menu-target tooltipped downwards" title="Create new..." aria-label="Create new...">
        <span class="octicon octicon-plus"></span>
        <span class="dropdown-arrow"></span>
      </a>

      <div class="js-menu-content">
      </div>
    </li>

    <li>
      <a href="/settings/profile" id="account_settings"
        class="tooltipped downwards"
        aria-label="Account settings "
        title="Account settings ">
        <span class="octicon octicon-tools"></span>
      </a>
    </li>
    <li>
      <a class="tooltipped downwards" href="/logout" data-method="post" id="logout" title="Sign out" aria-label="Sign out">
        <span class="octicon octicon-log-out"></span>
      </a>
    </li>

  </ul>



<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>


    <li class="section-title">
      <span title="sfthurber/cim-xa">This repository</span>
    </li>
      <li>
        <a href="/sfthurber/cim-xa/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
      </li>
      <li>
        <a href="/sfthurber/cim-xa/settings/collaboration"><span class="octicon octicon-person-add"></span> New collaborator</a>
      </li>
</ul>

</div>


    
  </div>
</div>

      

      




          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="PygUo0nq942bucPS6ZzwT5ho/f9KXjsb6QkXJBMDEh8=" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="16257868" />

    <div class="select-menu js-menu-container js-select-menu">
      <a class="social-count js-social-count" href="/sfthurber/cim-xa/watchers">
        1
      </a>
      <span class="minibutton select-menu-button with-count js-menu-target" role="button" tabindex="0">
        <span class="js-select-button">
          <span class="octicon octicon-eye-unwatch"></span>
          Unwatch
        </span>
      </span>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container" role="menu">

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for conversations in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
  

  <div class="js-toggler-container js-social-container starring-container ">
    <a href="/sfthurber/cim-xa/unstar"
      class="minibutton with-count js-toggler-target star-button starred upwards"
      title="Unstar this repository" data-remote="true" data-method="post" rel="nofollow">
      <span class="octicon octicon-star-delete"></span><span class="text">Unstar</span>
    </a>

    <a href="/sfthurber/cim-xa/star"
      class="minibutton with-count js-toggler-target star-button unstarred upwards"
      title="Star this repository" data-remote="true" data-method="post" rel="nofollow">
      <span class="octicon octicon-star"></span><span class="text">Star</span>
    </a>

      <a class="social-count js-social-count" href="/sfthurber/cim-xa/stargazers">
        0
      </a>
  </div>

  </li>


        <li>
          <a href="/sfthurber/cim-xa/fork" class="minibutton with-count js-toggler-target fork-button lighter upwards" title="Fork this repo" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span><span class="text">Fork</span>
          </a>
          <a href="/sfthurber/cim-xa/network" class="social-count">0</a>
        </li>


</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/sfthurber" class="url fn" itemprop="url" rel="author"><span itemprop="title">sfthurber</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/sfthurber/cim-xa" class="js-current-repository js-repo-home-link">cim-xa</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      

      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped leftwards" title="Code">
        <a href="/sfthurber/cim-xa" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /sfthurber/cim-xa">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped leftwards" title="Issues">
          <a href="/sfthurber/cim-xa/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /sfthurber/cim-xa/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped leftwards" title="Pull Requests">
        <a href="/sfthurber/cim-xa/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /sfthurber/cim-xa/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped leftwards" title="Wiki">
          <a href="/sfthurber/cim-xa/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_wiki /sfthurber/cim-xa/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped leftwards" title="Pulse">
        <a href="/sfthurber/cim-xa/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /sfthurber/cim-xa/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Graphs">
        <a href="/sfthurber/cim-xa/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /sfthurber/cim-xa/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Network">
        <a href="/sfthurber/cim-xa/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /sfthurber/cim-xa/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


      <div class="sunken-menu-separator"></div>
      <ul class="sunken-menu-group">
        <li class="tooltipped leftwards" title="Settings">
          <a href="/sfthurber/cim-xa/settings"
            class="sunken-menu-item" data-pjax aria-label="Settings">
            <span class="octicon octicon-tools"></span> <span class="full-word">Settings</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </a>
        </li>
      </ul>
  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=push">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/sfthurber/cim-xa.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/sfthurber/cim-xa.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=push">
  <h3><strong>SSH</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="git@github.com:sfthurber/cim-xa.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="git@github.com:sfthurber/cim-xa.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=push">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/sfthurber/cim-xa" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/sfthurber/cim-xa" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="octicon help tooltipped upwards" title="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/sfthurber/cim-xa/archive/master.zip"
                   class="minibutton sidebar-button"
                   title="Download this repository as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:d65a13dc176b471f53afd008f5781c38 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/sfthurber/cim-xa/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Find or create a branch…" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Find or create a branch…">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/blob/master/idiorm/README.markdown"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <form accept-charset="UTF-8" action="/sfthurber/cim-xa/branches" class="js-create-branch select-menu-item select-menu-new-item-form js-navigation-item js-new-item-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="PygUo0nq942bucPS6ZzwT5ho/f9KXjsb6QkXJBMDEh8=" /></div>
            <span class="octicon octicon-git-branch-create select-menu-item-icon"></span>
            <div class="select-menu-item-text">
              <h4>Create branch: <span class="js-new-item-name"></span></h4>
              <span class="description">from ‘master’</span>
            </div>
            <input type="hidden" name="name" id="name" class="js-new-item-value">
            <input type="hidden" name="branch" id="branch" value="master" />
            <input type="hidden" name="path" id="path" value="idiorm/README.markdown" />
          </form> <!-- /.select-menu-item -->

      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.11/idiorm/README.markdown"
                 data-name="1.11"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.11">1.11</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.10/idiorm/README.markdown"
                 data-name="1.10"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.10">1.10</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.06/idiorm/README.markdown"
                 data-name="1.06"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.06">1.06</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.05/idiorm/README.markdown"
                 data-name="1.05"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.05">1.05</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.04/idiorm/README.markdown"
                 data-name="1.04"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.04">1.04</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.03/idiorm/README.markdown"
                 data-name="1.03"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.03">1.03</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.02/idiorm/README.markdown"
                 data-name="1.02"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.02">1.02</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.01/idiorm/README.markdown"
                 data-name="1.01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.01">1.01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sfthurber/cim-xa/tree/1.0/idiorm/README.markdown"
                 data-name="1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0">1.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/sfthurber/cim-xa" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">cim-xa</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/sfthurber/cim-xa/tree/master/idiorm" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">idiorm</span></a></span><span class="separator"> / </span><strong class="final-path">README.markdown</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="idiorm/README.markdown" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://1.gravatar.com/avatar/9a5f8ac612c613b6ff9984bfdcedfe5c?d=https%3A%2F%2Fa248.e.akamai.net%2Fassets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png&amp;r=x&amp;s=140" width="24" />
    <span class="author"><span rel="author">unknown</span></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2014-01-26T13:42:09-08:00" title="2014-01-26 13:42:09">January 26, 2014</time>
    <div class="commit-title">
        <a href="/sfthurber/cim-xa/commit/803e801ec3c88e122ed3c4622048022d9214a794" class="message" data-pjax="true" title="orm">orm</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>0</strong> contributors</a></p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
      </ul>
    </div>
  </div>

<div id="files" class="bubble">
  <div class="file">
    <div class="meta">
      <div class="info">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
          <span>165 lines (120 sloc)</span>
        <span>10.564 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped leftwards"
               href="http://windows.github.com" title="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
                <a class="minibutton js-update-url-with-hash"
                   href="/sfthurber/cim-xa/edit/master/idiorm/README.markdown"
                   data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
          <a href="/sfthurber/cim-xa/raw/master/idiorm/README.markdown" class="button minibutton " id="raw-url">Raw</a>
            <a href="/sfthurber/cim-xa/blame/master/idiorm/README.markdown" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/sfthurber/cim-xa/commits/master/idiorm/README.markdown" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger empty-icon tooltipped downwards"
             href="/sfthurber/cim-xa/delete/master/idiorm/README.markdown"
             title=""
             data-method="post" data-test-id="delete-blob-file" rel="nofollow">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
      
  <div id="readme" class="blob instapaper_body">
    <article class="markdown-body entry-content" itemprop="mainContentOfPage"><h1>
<a name="idiorm" class="anchor" href="#idiorm"><span class="octicon octicon-link"></span></a>Idiorm</h1>

<p><a href="https://travis-ci.org/j4mie/idiorm"><img src="https://github-camo.global.ssl.fastly.net/624695af39e92d1140616a0ef2b30c62e038e794/68747470733a2f2f7472617669732d63692e6f72672f6a346d69652f6964696f726d2e706e673f6272616e63683d6d6173746572" alt="Build Status" data-canonical-src="https://travis-ci.org/j4mie/idiorm.png?branch=master" style="max-width:100%;"></a></p>

<p><a href="http://j4mie.github.com/idiormandparis/">http://j4mie.github.com/idiormandparis/</a></p>

<hr><h3>
<a name="feature-complete" class="anchor" href="#feature-complete"><span class="octicon octicon-link"></span></a>Feature complete</h3>

<p>Idiorm is now considered to be feature complete as of version 1.4.0. Whilst it will continue to be maintained with bug fixes there will be no further new features added.</p>

<hr><p>A lightweight nearly-zero-configuration object-relational mapper and fluent query builder for PHP5.</p>

<p>Tested on PHP 5.2.0+ - may work on earlier versions with PDO and the correct database drivers.</p>

<p>Released under a <a href="http://en.wikipedia.org/wiki/BSD_licenses">BSD license</a>.</p>

<p><strong>See Also: <a href="http://github.com/j4mie/paris">Paris</a>, an Active Record implementation built on top of Idiorm.</strong></p>

<h2>
<a name="features" class="anchor" href="#features"><span class="octicon octicon-link"></span></a>Features</h2>

<ul>
<li>Makes simple queries and simple CRUD operations completely painless.</li>
<li>Gets out of the way when more complex SQL is required.</li>
<li>Built on top of <a href="http://php.net/pdo">PDO</a>.</li>
<li>Uses <a href="http://uk.php.net/manual/en/pdo.prepared-statements.php">prepared statements</a> throughout to protect against <a href="http://en.wikipedia.org/wiki/SQL_injection">SQL injection</a> attacks.</li>
<li>Requires no model classes, no XML configuration and no code generation: works out of the box, given only a connection string.</li>
<li>Consists of one main class called <code>ORM</code>. Additional classes are prefixed with <code>Idiorm</code>. Minimal global namespace pollution.</li>
<li>Database agnostic. Currently supports SQLite, MySQL, Firebird and PostgreSQL. May support others, please give it a try!</li>
<li>Supports collections of models with method chaining to filter or apply actions to multiple results at once.</li>
<li>Multiple connections supported</li>
<li>PSR-1 compliant methods (any method can be called in camelCase instead of underscores eg. <code>find_many()</code> becomes <code>findMany()</code>) - you'll need PHP 5.3+</li>
</ul><h2>
<a name="documentation" class="anchor" href="#documentation"><span class="octicon octicon-link"></span></a>Documentation</h2>

<p>The documentation is hosted on Read the Docs: <a href="http://idiorm.rtfd.org">idiorm.rtfd.org</a></p>

<h3>
<a name="building-the-docs" class="anchor" href="#building-the-docs"><span class="octicon octicon-link"></span></a>Building the Docs</h3>

<p>You will need to install <a href="http://sphinx-doc.org/">Sphinx</a> and then in the docs folder run:</p>

<pre><code>make html
</code></pre>

<p>The documentation will now be in docs/_build/html/index.html</p>

<h2>
<a name="lets-see-some-code" class="anchor" href="#lets-see-some-code"><span class="octicon octicon-link"></span></a>Let's See Some Code</h2>

<div class="highlight highlight-php"><pre><span class="nv">$user</span> <span class="o">=</span> <span class="nx">ORM</span><span class="o">::</span><span class="na">for_table</span><span class="p">(</span><span class="s1">'user'</span><span class="p">)</span>
    <span class="o">-&gt;</span><span class="na">where_equal</span><span class="p">(</span><span class="s1">'username'</span><span class="p">,</span> <span class="s1">'j4mie'</span><span class="p">)</span>
    <span class="o">-&gt;</span><span class="na">find_one</span><span class="p">();</span>

<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">first_name</span> <span class="o">=</span> <span class="s1">'Jamie'</span><span class="p">;</span>
<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">save</span><span class="p">();</span>

<span class="nv">$tweets</span> <span class="o">=</span> <span class="nx">ORM</span><span class="o">::</span><span class="na">for_table</span><span class="p">(</span><span class="s1">'tweet'</span><span class="p">)</span>
    <span class="o">-&gt;</span><span class="na">select</span><span class="p">(</span><span class="s1">'tweet.*'</span><span class="p">)</span>
    <span class="o">-&gt;</span><span class="na">join</span><span class="p">(</span><span class="s1">'user'</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
        <span class="s1">'user.id'</span><span class="p">,</span> <span class="s1">'='</span><span class="p">,</span> <span class="s1">'tweet.user_id'</span>
    <span class="p">))</span>
    <span class="o">-&gt;</span><span class="na">where_equal</span><span class="p">(</span><span class="s1">'user.username'</span><span class="p">,</span> <span class="s1">'j4mie'</span><span class="p">)</span>
    <span class="o">-&gt;</span><span class="na">find_many</span><span class="p">();</span>

<span class="k">foreach</span> <span class="p">(</span><span class="nv">$tweets</span> <span class="k">as</span> <span class="nv">$tweet</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">echo</span> <span class="nv">$tweet</span><span class="o">-&gt;</span><span class="na">text</span><span class="p">;</span>
<span class="p">}</span>
</pre></div>

<h2>
<a name="changelog" class="anchor" href="#changelog"><span class="octicon octicon-link"></span></a>Changelog</h2>

<h4>
<a name="141---release-2013-12-12" class="anchor" href="#141---release-2013-12-12"><span class="octicon octicon-link"></span></a>1.4.1 - release 2013-12-12</h4>

<p><strong>Patch update to remove a broken pull request</strong> - may have consequences for users of 1.4.0 that exploited the "<code>find_many()</code> now returns an associative array with the databases primary ID as the array keys" change that was merged in 1.4.0.</p>

<ul>
<li>Back out pull request/issue <a href="https://github.com/j4mie/idiorm/pull/133">#133</a> as it breaks backwards compatibility in previously unexpected ways (see <a href="https://github.com/j4mie/idiorm/pull/162">#162</a>, <a href="https://github.com/j4mie/idiorm/issues/156">#156</a> and <a href="https://github.com/j4mie/idiorm/pull/133#issuecomment-29063108">#133</a>) - sorry for merging this change into Idiorm - closes <a href="https://github.com/j4mie/idiorm/issues/156">issue 156</a>
</li>
</ul><h4>
<a name="140---release-2013-09-05" class="anchor" href="#140---release-2013-09-05"><span class="octicon octicon-link"></span></a>1.4.0 - release 2013-09-05</h4>

<ul>
<li>
<code>find_many()</code> now returns an associative array with the databases primary ID as the array keys [<a href="https://github.com/Surt">Surt</a>] - <a href="https://github.com/j4mie/idiorm/issues/133">issue #133</a>
</li>
<li>Calls to <code>set()</code> and <code>set_expr()</code> return <code>$this</code> allowing them to be chained [<a href="https://github.com/Surt">Surt</a>]</li>
<li>Add PSR-1 compliant camelCase method calls to Idiorm (PHP 5.3+ required) [<a href="https://github.com/crhayes">crhayes</a>] - <a href="https://github.com/j4mie/idiorm/issues/108">issue #108</a>
</li>
<li>Add static method <code>get_config()</code> to access current configuration [<a href="https://github.com/mikejestes">javierd</a>] - <a href="https://github.com/j4mie/idiorm/issues/141">issue #141</a>
</li>
<li>Add logging callback functionality [<a href="https://github.com/lalop">lalop</a>] - <a href="https://github.com/j4mie/idiorm/issues/130">issue #130</a>
</li>
<li>Add support for MS SQL <code>TOP</code> limit style (automatically used for PDO drivers: sqlsrv, dblib and mssql) [<a href="https://github.com/numkem">numkem</a>] - <a href="https://github.com/j4mie/idiorm/issues/116">issue #116</a>
</li>
<li>Uses table aliases in <code>WHERE</code> clauses [<a href="https://github.com/vicvicvic">vicvicvic</a>] - <a href="https://github.com/j4mie/idiorm/issues/140">issue #140</a>
</li>
<li>Ignore result columns when calling an aggregate function [<a href="https://github.com/tassoevan">tassoevan</a>] - <a href="https://github.com/j4mie/idiorm/issues/120">issue #120</a>
</li>
<li>Improve documentation [<a href="https://github.com/bruston">bruston</a>] - <a href="https://github.com/j4mie/idiorm/issues/111">issue #111</a>
</li>
<li>Improve PHPDoc on <code>get_db()</code> [<a href="https://github.com/mailopl">mailopl</a>] - <a href="https://github.com/j4mie/idiorm/issues/106">issue #106</a>
</li>
<li>Improve documentation [<a href="https://github.com/sjparsons">sjparsons</a>] - <a href="https://github.com/j4mie/idiorm/issues/103">issue #103</a>
</li>
<li>Make tests/bootstrap.php HHVM compatible [<a href="https://github.com/JoelMarcey">JoelMarcey</a>] - <a href="https://github.com/j4mie/idiorm/issues/143">issue #143</a>
</li>
<li>Fix docblock [<a href="https://github.com/ulrikjohansson">ulrikjohansson</a>] - <a href="https://github.com/j4mie/idiorm/issues/147">issue #147</a>
</li>
<li>Fix incorrect variable name in querying documentation [<a href="https://github.com/fridde">fridde</a>] - <a href="https://github.com/j4mie/idiorm/issues/146">issue #146</a>
</li>
</ul><h4>
<a name="130---release-2013-01-31" class="anchor" href="#130---release-2013-01-31"><span class="octicon octicon-link"></span></a>1.3.0 - release 2013-01-31</h4>

<ul>
<li>Documentation moved to <a href="http://idiorm.rtfd.org">idiorm.rtfd.org</a> and now built using <a href="http://sphinx-doc.org/">Sphinx</a>
</li>
<li>Add support for multiple database connections - closes <a href="https://github.com/j4mie/idiorm/issues/15">issue #15</a> [<a href="https://github.com/tag">tag</a>]</li>
<li>Add in raw_execute - closes <a href="https://github.com/j4mie/idiorm/issues/40">issue #40</a> [<a href="https://github.com/tag">tag</a>]</li>
<li>Add <code>get_last_statement()</code> - closes <a href="https://github.com/j4mie/idiorm/issues/84">issue #84</a> [<a href="https://github.com/tag">tag</a>]</li>
<li>Add HAVING clause functionality - closes <a href="https://github.com/j4mie/idiorm/issues/50">issue #50</a>
</li>
<li>Add <code>is_new</code> method - closes <a href="https://github.com/j4mie/idiorm/issues/85">issue #85</a>
</li>
<li>Add <code>ArrayAccess</code> support to the model instances allowing property access via <code>$model['field']</code> as well as <code>$model-&gt;field</code> - <a href="https://github.com/j4mie/idiorm/issues/51">issue #51</a>
</li>
<li>Add a result set object for collections of models that can support method chains to filter or apply actions to multiple results at once - issue <a href="https://github.com/j4mie/idiorm/issues/51">#51</a> and <a href="https://github.com/j4mie/idiorm/issues/22">#22</a>
</li>
<li>Add support for <a href="http://www.firebirdsql.org">Firebird</a> with <code>ROWS</code> and <code>TO</code> result set limiting and identifier quoting [<a href="https://github.com/mapner">mapner</a>] - <a href="https://github.com/j4mie/idiorm/issues/98">issue #98</a>
</li>
<li>Fix last insert ID for PostgreSQL using RETURNING - closes issues <a href="https://github.com/j4mie/idiorm/issues/62">#62</a> and <a href="https://github.com/j4mie/idiorm/issues/89">#89</a> [<a href="https://github.com/laacz">laacz</a>]</li>
<li>Reset Idiorm after performing a query to allow for calling <code>count()</code> and then <code>find_many()</code> [<a href="https://github.com/fayland">fayland</a>] - <a href="https://github.com/j4mie/idiorm/issues/97">issue #97</a>
</li>
<li>Change Composer to use a classmap so that autoloading is better supported [<a href="https://github.com/javiervd">javierd</a>] - <a href="https://github.com/j4mie/idiorm/issues/96">issue #96</a>
</li>
<li>Add query logging to <code>delete_many</code> [<a href="https://github.com/tag">tag</a>]</li>
<li>Fix when using <code>set_expr</code> alone it doesn't trigger query creation - closes <a href="https://github.com/j4mie/idiorm/issues/90">issue #90</a>
</li>
<li>Escape quote symbols in "<em>quote</em>identifier_part" - close <a href="https://github.com/j4mie/idiorm/issues/74">issue #74</a>
</li>
<li>Fix issue with aggregate functions always returning <code>int</code> when is <code>float</code> sometimes required - closes <a href="https://github.com/j4mie/idiorm/issues/92">issue #92</a>
</li>
<li>Move testing into PHPUnit to unify method testing and query generation testing</li>
</ul><h4>
<a name="123---release-2012-11-28" class="anchor" href="#123---release-2012-11-28"><span class="octicon octicon-link"></span></a>1.2.3 - release 2012-11-28</h4>

<ul>
<li>Fix <a href="https://github.com/j4mie/idiorm/issues/78">issue #78</a> - remove use of PHP 5.3 static call</li>
</ul><h4>
<a name="122---release-2012-11-15" class="anchor" href="#122---release-2012-11-15"><span class="octicon octicon-link"></span></a>1.2.2 - release 2012-11-15</h4>

<ul>
<li>Fix bug where input parameters were sent as part-indexed, part associative</li>
</ul><h4>
<a name="121---release-2012-11-15" class="anchor" href="#121---release-2012-11-15"><span class="octicon octicon-link"></span></a>1.2.1 - release 2012-11-15</h4>

<ul>
<li>Fix minor bug caused by IdiormStringException not extending Exception</li>
</ul><h4>
<a name="120---release-2012-11-14" class="anchor" href="#120---release-2012-11-14"><span class="octicon octicon-link"></span></a>1.2.0 - release 2012-11-14</h4>

<ul>
<li>Setup composer for installation via packagist (j4mie/idiorm)</li>
<li>Add <code>order_by_expr</code> method [<a href="http://github.com/sandermarechal">sandermarechal</a>]</li>
<li>Add support for raw queries without parameters argument [<a href="http://github.com/sandermarechal">sandermarechal</a>]</li>
<li>Add support to set multiple properties at once by passing an associative array to <code>set</code> method [<a href="http://github.com/sandermarechal">sandermarechal</a>]</li>
<li>Allow an associative array to be passed to <code>configure</code> method [<a href="http://github.com/jordanlev">jordanlev</a>]</li>
<li>Patch to allow empty Paris models to be saved ([<a href="http://github.com/j4mie/paris">j4mie/paris</a>]) - <a href="https://github.com/j4mie/idiorm/issues/58">issue #58</a>
</li>
<li>Add <code>select_many</code> and <code>select_many_expr</code> - closing issues <a href="https://github.com/j4mie/idiorm/issues/49">#49</a> and <a href="https://github.com/j4mie/idiorm/issues/69">#69</a>
</li>
<li>Add support for <code>MIN</code>, <code>AVG</code>, <code>MAX</code> and <code>SUM</code> - closes <a href="https://github.com/j4mie/idiorm/issues/16">issue #16</a>
</li>
<li>Add <code>group_by_expr</code> - closes <a href="https://github.com/j4mie/idiorm/issues/24">issue #24</a>
</li>
<li>Add <code>set_expr</code> to allow database expressions to be set as ORM properties - closes issues <a href="https://github.com/j4mie/idiorm/issues/59">#59</a> and <a href="https://github.com/j4mie/idiorm/issues/43">#43</a> [<a href="https://github.com/brianherbert">brianherbert</a>]</li>
<li>Prevent ambiguous column names when joining tables - <a href="https://github.com/j4mie/idiorm/issues/66">issue #66</a> [<a href="https://github.com/hellogerard">hellogerard</a>]</li>
<li>Add <code>delete_many</code> method [<a href="https://github.com/CBeerta">CBeerta</a>]</li>
<li>Allow unsetting of ORM parameters [<a href="https://github.com/CBeerta">CBeerta</a>]</li>
<li>Add <code>find_array</code> to get the records as associative arrays [<a href="https://github.com/Surt">Surt</a>] - closes <a href="https://github.com/j4mie/idiorm/issues/17">issue #17</a>
</li>
<li>Fix bug in <code>_log_query</code> with <code>?</code> and <code>%</code> supplied in raw where statements etc. - closes <a href="https://github.com/j4mie/idiorm/issues/57">issue #57</a> [<a href="https://github.com/ridgerunner">ridgerunner</a>]</li>
</ul><h4>
<a name="111---release-2011-01-30" class="anchor" href="#111---release-2011-01-30"><span class="octicon octicon-link"></span></a>1.1.1 - release 2011-01-30</h4>

<ul>
<li>Fix bug in quoting column wildcard. j4mie/paris#12</li>
<li>Small documentation improvements</li>
</ul><h4>
<a name="110---released-2011-01-24" class="anchor" href="#110---released-2011-01-24"><span class="octicon octicon-link"></span></a>1.1.0 - released 2011-01-24</h4>

<ul>
<li>Add <code>is_dirty</code> method</li>
<li>Add basic query caching</li>
<li>Add <code>distinct</code> method</li>
<li>Add <code>group_by</code> method</li>
</ul><h4>
<a name="100---released-2010-12-01" class="anchor" href="#100---released-2010-12-01"><span class="octicon octicon-link"></span></a>1.0.0 - released 2010-12-01</h4>

<ul>
<li>Initial release</li>
</ul></article>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.04200s from github-fe139-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/sfthurber/cim-xa/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

