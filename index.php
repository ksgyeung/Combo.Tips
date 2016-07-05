<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=680, user-scalable=yes">
    <head>
      <meta name="description" content="Puzzle &amp; Dragons Combo Tips, Tools, and Strategy information for the Puzzle &amp; Dragons Player.">
      <meta name="keywords" content="combo tips, puzzle and dragons, pad, card, game, deck, board, gungho">
      <meta name="language" content="en">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="icon"
            type="image/png"
            href="/images/favicon.ico">
      <title>Combo Tips - The Puzzle &amp; Dragons optimizer</title>
      <script src="/ext/jquery-1.9.1.min.js"></script>
      <script src="/ext/dropzone.min.js"></script>
      <script src="/ext/bootstrap-slider.min.js"></script>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/basic.css">
      <link rel="stylesheet" type="text/css" href="css/dropzone.css">
      <link rel="stylesheet" type="text/css" href="css/throbber.css">
      <link rel="stylesheet" type="text/css" href="css/border-flash.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <meta charset="utf-8"/>
    </head>
    <body>

      <canvas id="path" width="380" height="316"></canvas>
      <div id="grid">
        <div id="o00" class="row1"></div>
        <div id="o01" class="row1"></div>
        <div id="o02" class="row1"></div>
        <div id="o03" class="row1"></div>
        <div id="o04" class="row1"></div>
        <div id="o05" class="row1"></div>

        <div id="o10" class="row2"></div>
        <div id="o11" class="row2"></div>
        <div id="o12" class="row2"></div>
        <div id="o13" class="row2"></div>
        <div id="o14" class="row2"></div>
        <div id="o15" class="row2"></div>

        <div id="o20" class="row3"></div>
        <div id="o21" class="row3"></div>
        <div id="o22" class="row3"></div>
        <div id="o23" class="row3"></div>
        <div id="o24" class="row3"></div>
        <div id="o25" class="row3"></div>

        <div id="o30" class="row4"></div>
        <div id="o31" class="row4"></div>
        <div id="o32" class="row4"></div>
        <div id="o33" class="row4"></div>
        <div id="o34" class="row4"></div>
        <div id="o35" class="row4"></div>

        <div id="o40" class="row5"></div>
        <div id="o41" class="row5"></div>
        <div id="o42" class="row5"></div>
        <div id="o43" class="row5"></div>
        <div id="o44" class="row5"></div>
        <div id="o45" class="row5"></div>
      </div>
      <div id="profile">
        <table>
          <tr class="center-text">
            <th></th>
            <th>N</th>
            <th>Mass</th>
            <th>RA</th>
            <th>TPA-W</th>
          </tr>
          <tr>
            <td class="e0" title="Fire"></td>
            <td><input id="e0-normal" value="1"/></td>
            <td><input id="e0-mass" value="3"/></td>
            <td><input id="e0-row" value="0"/></td>
            <td><input id="e0-tpa" value="0"/></td>
          </tr>
          <tr>
            <td class="e1" title="Water"></td>
            <td><input id="e1-normal" value="1"/></td>
            <td><input id="e1-mass" value="3"/></td>
            <td><input id="e1-row" value="0"/></td>
            <td><input id="e1-tpa" value="0"/></td>
          </tr>
          <tr>
            <td class="e2" title="Wood"></td>
            <td><input id="e2-normal" value="1"/></td>
            <td><input id="e2-mass" value="3"/></td>
            <td><input id="e2-row" value="0"/></td>
            <td><input id="e2-tpa" value="0"/></td>
          </tr>
          <tr>
            <td class="e3" title="Light"></td>
            <td><input id="e3-normal" value="1"/></td>
            <td><input id="e3-mass" value="3"/></td>
            <td><input id="e3-row" value="0"/></td>
            <td><input id="e3-tpa" value="0"/></td>
          </tr>
          <tr>
            <td class="e4" title="Dark"></td>
            <td><input id="e4-normal" value="1"/></td>
            <td><input id="e4-mass" value="3"/></td>
            <td><input id="e4-row" value="0"/></td>
            <td><input id="e4-tpa" value="0"/></td>
          </tr>
          <tr>
            <td class="e5" title="Heal"></td>
            <td><input id="e5-normal" value="0.3"/></td>
            <td><input id="e5-mass" value="0.3"/></td>
            <td><input id="e5-row" value="0"/></td>
            <td><input id="e5-tpa" value="0"/></td>
          </tr>
          <tr>
            <td class="e6" title="Junk"></td>
            <td><input id="e6-normal" value="0.1"/></td>
            <td><input id="e6-mass" value="0.1"/></td>
            <td><input id="e6-row" value="0"/></td>
            <td><input id="e6-tpa" value="0"/></td>
          </tr>
          <tr class="center-text">
            <th></th>
            <th><a data-toggle="tooltip" title="Normal"><i class="glyphicon glyphicon-question-sign"></i></a></th>
            <th><a data-toggle="tooltip" title="Mass"><i class="glyphicon glyphicon-question-sign"></i></a></th>
            <th><a data-toggle="tooltip" title="Row Awkns"><i class="glyphicon glyphicon-question-sign"></i></a></th>
            <th><a data-toggle="tooltip" title="TPA Weight - Put the additional weight coming from TPAs. E.g. If you have 3 monsters with 1k green attack and one has a TPA and ones has two TPA, the base weight is 3 and the TPA effect is 1*1.5 for the single TPA (.5 extra) and 1*1.5*1.5 = 2.25 (1.25 extra) for the double TPA so you enter 1.75."><i class="glyphicon glyphicon-question-sign"></i></a></th>
          </tr>
        </table>
        <p><br>
          Profile:<br> 
          <select class="btn btn-default"  id="profile-selector">
            <option value="
                           1,3,0,0,
                           1,3,0,0,
                           1,3,0,0,
                           1,3,0,0,
                           1,3,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1" selected="selected">5-color team, multiple target</option>
            <option value="
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">5-color team, single target</option>
            <option value="
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           1,1,0,0,
                           0.1,0.1,0,0,
                           -1">Recovery</option>
            <option value="
                           0.1,0.3,0,0,
                           0.1,0.3,0,0,
                           0.1,0.3,0,0,
                           0.1,0.3,0,0,
                           0.1,0.3,0,0,
                           1,1,0,0,
                           0.1,0.1,0,0,
                           -1">Recovery, multiple target</option>
            <option value="
                           1,3,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Fire team, multiple target</option>
            <option value="
                           1,1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Fire team, single target</option>
            <option value="
                           0.1,0.1,0,0,
                           1,3,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Water team, multiple target</option>
            <option value="
                           0.1,0.1,0,0,
                           1,1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Water team, single target</option>
            <option value="
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           1,3,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Wood team, multiple target</option>
            <option value="
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           1,1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Wood team, single target</option>
            <option value="
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           1,3,0,0,
                           0.1,0.1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Light team, multiple target</option>
            <option value="
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           1,1,0,0,
                           0.1,0.1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Light team, single target</option>
            <option value="
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           1,3,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Dark team, multiple target</option>
            <option value="
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           0.1,0.1,0,0,
                           1,1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Dark team, single target</option>
            <option value="
                           1.7,1.7,1,2.125,
                           1.1,1.1,2,1.375,
                           9.5,9.5.1,4,9.875,
                           0,0,0,0,
                           1.3,1.3,0,1.625,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Zhuge: all double TPA</option>
            <option value="
                           9,9,8,0,
                           0,0,0,0,
                           0,0,0,0,
                           0.5,0.5,0,0,
                           1.6,1.6,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Dark Shiva</option>
            <option value="
                           0,0,0,0,
                           1.3,1.3,0,0,
                           0,0,0,0,
                           0,0,0,0,
                           7,7,7,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           -1">Satan</option>
            <option value="
                           0,0,0,0,
                           4.5,4.5,1,1.5,
                           1.4,1.4,0,.45,
                           2,2,0,0,
                           3.3,3.3,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           0">UmiYama</option>
            <option value="
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           0,0,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           1">Kirin</option>
            <option value="
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           2">Ra</option>
            <option value="
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           3">Kush</option>
            <option value="
                           1,1,0,0,
                           1,1,0,0,
                           0,0,0,0,
                           0,0,0,0,
                           1,1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           4">Haku</option>
            <option value="
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           5">L/L Ra</option>
            <option value="
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           6">D/L Anubis</option>
            <option value="
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           1,1,0,0,
                           0.3,0.3,0,0,
                           0.1,0.1,0,0,
                           7">Bastet</option>
          </select>
          <br>
          <br>
          <label for="max-length">Max path length:</label>
          <input id="max-length" value="20" size="3"/><br /><br />
          <label for="num-paths">Path Number Scaling</label>
          <input type="text" value="100" id="num-path-value" class="fast">
          <br>
          <!-- <input id="num-paths" value="100" size="3"/> -->
          <input type="text" id="num-paths" class="span2" value="" data-slider-min="10" data-slider-max="400" data-slider-step="10" data-slider-value="100" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide">
          <em style="display: block; margin-top: 4px;"><span style="color: rgb(93,167,102)" class="glyphicon glyphicon-arrow-up"></span>  larger: longer computation, better solutions</em>
        </p>
      </div>
      <div id="controls">
        <input type="checkbox" id="allow-8"/>
        <label for="allow-8">Allow 8-direction movement</label><br />
        <input class="btn btn-primary" type="button" value="Solve" id="solve"/>
      </div>
      <div id="extra-controls">
        <input class="btn btn-default" type="button" value="Drop matches" id="drop"/> &bull;
        <input class="btn btn-default" type="button" value="Final state" id="final"/> &bull;
        <select class="btn btn-default"  id="randomization-type">
          <option value="0,1,2">3-color</option>
          <option value="0,1,2,5">3 + Heal</option>
          <option value="0,1,2,3,4">5-color</option>
          <option value="0,1,2,3,4,5" selected="selected">5 + Heal</option>
          <option value="0,1,2,3,4,5,6">All</option>
        </select>
        <br>
        <input class="btn btn-default" type="button" value="Randomize" id="randomize"/> &bull;
        <input class="btn btn-default" type="button" value="Clear" id="clear"/> &bull;
        <input class="btn btn-default" type="button" value="Import" id="import"/> &bull;
        <br>
        <input class="btn btn-default" type="button" value="Change orbs" id="change"/>
      </div>
      <div id="hand"></div>
      <div id="import-popup">
        <div id="import-legend">
          <span class="e0"></span> = 0 / r<br />
          <span class="e1"></span> = 1 / b<br />
          <span class="e2"></span> = 2 / g<br />
          <span class="e3"></span> = 3 / y<br />
          <span class="e4"></span> = 4 / p<br />
          <span class="e5"></span> = 5 / h<br />
          <span class="e6"></span> = 6 / j<br />
          <span class="eX"></span> = . / x<br />
        </div>
        <textarea id="import-textarea" cols="6" rows="5" spellcheck="false"></textarea>
        <div id="import-control">
          <input type="button" value="Cancel" id="import-cancel"/>
          <input type="button" value="Import" id="import-import"/>
        </div>
      </div>
      <div id="change-popup">
        <div>
          <span class="e0"></span> &rarr; <span class="e0 change-target"></span><br />
          <span class="e1"></span> &rarr; <span class="e1 change-target"></span><br />
          <span class="e2"></span> &rarr; <span class="e2 change-target"></span><br />
          <span class="e3"></span> &rarr; <span class="e3 change-target"></span><br />
          <span class="e4"></span> &rarr; <span class="e4 change-target"></span><br />
          <span class="e5"></span> &rarr; <span class="e5 change-target"></span><br />
          <span class="e6"></span> &rarr; <span class="e6 change-target"></span><br />
          <span class="eX"></span> &rarr; <span class="eX change-target"></span>
        </div>
        <div id="change-control">
          <input type="button" value="Cancel" class="btn btn-danger" id="change-cancel"/>
          <input type="button" value="Change" class="btn btn-success" id="change-change"/>
        </div>
      </div>
      <div class="container-fluid" style="">
        <div class="row">
          <div class="row">
            <div class="col-md-8">
              <!-- empty -->
            </div>
            <div class="col-md-4">
              <!-- <h1>.col-md-4</h1> -->
              <div id="solutions">
                <p id="are-you-ready">Ready for tips?</p>
                <div class="loading-throbber">
                  <span id="status">...</span>
                  </span>
                <div class="sliderOMG">
                  <div class="line"></div>
                  <div class="break dot1"></div>
                  <div class="break dot2"></div>
                  <div class="break dot3"></div>
                </div>
              </div>
              <ol></ol>
            </div>
          </div>
        </div>
      </div>
      </div>

    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#disqus_thread">
            <span class="sr-only">Chat</span>
            <span class="glyphicon glyphicon-heart-empty"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-tower"></span> Combo.Tips (Alpha)</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse in" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown upload open">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Import from screenshot <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="list-float-left"><a href="#"><img class="uploaded-image" src="/images/image2.png"></a>

                  <span class="glyphicon glyphicon-question-sign"> </span><span>Click the image to import</span>
                </li>
                <li class="list-float-right">
                  <a href="#">
                    <form id="screenshot-upload" action="upload.php" class="dropzone">
                    </form>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="divider"></li>
                <li><a id="keep-open" href="#">
                  <form role="form">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Don't close this window!</input>
                      </label>
                  </form>
                  </div></a></li>
          </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'combotips';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
<span class="secondary-navbar-bottom">
  <span id="bitcoin-donate-msg"><span class="support-tag">Support</span> the project <span class="glyphicon glyphicon-arrow-right"></span></span>
  <a class="coinbase-button" data-code="df278ca7d92b2380ca3d3757ed5f6132" data-button-style="donation_small" href="https://coinbase.com/checkouts/df278ca7d92b2380ca3d3757ed5f6132">Donate Bitcoins</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
</span>
<script src="/ext/easeljs-0.7.1.min.js"></script>
<script src="/ext/main.js"></script>
<script src="/ext/optimizer.js"></script>
</body>
</html>
<!-- AGPLv3
pndopt - Puzzle & Dragons Optimizer
Copyright (C) 2013  kennytm

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

-->
