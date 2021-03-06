<?php
$page = "updates";
include "includes/header.php";
?>

<div id="content">

<h1>Firmware Updates</h1>

<p>You only need to download the latest updater: it includes the full firmware so it will bring your Zero up-to-date regardless of the version you're updating from.</p>

<h2>OpenDingux Release 2014-05-05</h2>

<p>Download: <a href="files/gcw0-update-2014-05-05-take2.opk">OpenDingux Update for GCW Zero</a></p>

<p>If you encounter "<code>Flashed image is corrupted!</code>" error messages when installing the 2014-05-05 update, there is <a href="files/gcw0-anti-corruption-update-2014-05-05.opk">a special anti-corruption mini-update</a> to fix that issue. Install it and then retry the 2014-05-05 update. Note that this mini-update is intended only for October 2013 firmwares; you can find the firmware version in the System Info application under the Settings tab.</p>

<p>Root file-system changes:</p>
<ul>
<li>Triple buffering in SDL</li>
<li>Input through joydev instead of evdev for joysticks</li>
<li>Access point mode (ad-hoc WiFi between two Zeros)</li>
<li>Integrated WiFi manager (GCW Connect)</li>
<li>Integrated image viewer (o2xiv)</li>
<li>WiFi notifier (blinks the green LED slowly)</li>
<li>Low-power warning (blinks the green LED fast)</li>
<li>Root file-system based on Buildroot 2014.02</li>
<li>Root file-system now located on system partition</li>
<li>On-demand loading of the network daemons</li>
<li>Added command-line tool to launch OPKs, "opkrun"</li>
<li>Added WiFi modules for recent units</li>
<li>Added GNU Screen</li>
</ul>

<p>Kernel changes:</p>
<ul>
<li>Kernel based on Linux 3.12</li>
<li>Watchdog driver (automatic reboot on kernel crash/panic)</li>
<li>Optional joystick interface for built-in controls; an application can request the joystick interface using <a href="http://wiki.gcw-zero.com/OPK#OpenDingux-specific_metadata">the new X-OD-NeedsJoystick key</a></li>
<li>Supports loadable modules</li>
<li>rfkill (Internal USB bus powered on-demand)</li>
<li>Boot splash (press A for verbose boot)</li>
</ul>

<p>GMenu2X:</p>
<ul>
<li>UI improvements</li>
<li>Custom fonts supported</li>
<li>New themes</li>
<li>Full navigation with joystick</li>
<li>Launches OPKs with "opkrun"</li>
</ul>

<p>Power switch daemon:</p>
<ul>
<li>Fix the Power + X bug (crazy input events after the combo is used)</li>
<li>Sends SDLK_HOME if the switch is quickly flicked</li>
</ul>

<p>New important libraries:</p>
<ul>
<li>Allegro 4</li>
<li>OpenAL</li>
<li>Java (JamVM + GNU Classpath)</li>
<li>JavaScript: NodeJS</li>
<li>Lua: lua-jit</li>
<li>SDL2 (experimental)</li>
</ul>

<h2>OpenDingux Release 2014-04-27</h2>

<p>This update was retracted because the files it installed could be corrupted while copying and one of the checksum verifications that protects against activating corrupted installs didn't work either.</p>

<h2>OpenDingux Release 2013-10-04</h2>
<p>Download: <a href="files/gcw0-update-2013-10-04.opk">OpenDingux Update for GCW Zero</a></p>
<p>Changes:</p>
<ul>
<li>included improvements in OpenGL ES from the Etnaviv project; read <a href="files/etnaviv-2013-10-04.html">details here</a></li>
<li>set GPU clock to 500 MHz (was 432 MHz)</li>
<li>set VPU memory bus clock to 166 MHz (was 333 MHz, but it didn't actually work at this speed); the VPU itself runs at 500 MHz</li>
<li>print a reminder that the login name is "root" in the network configuration utility</li>
</ul>

<h2>OpenDingux Release 2013-09-13</h2>
<p>Download: <a href="files/gcw0-update-2013-09-13.opk">OpenDingux Update for GCW Zero</a></p>
<p>Changes:</p>
<ul>
<li>added OpenGL ES 1 and 2 support; this is based on Etnaviv and Mesa, so fully open source; read <a href="files/etnaviv-2013-09-13.html">details here</a></li>
<li>added network configuration utility under the "settings" tab in gmenu2x; you can choose between setting a random password (recommended) or passwordless login; login name is "root"</li>
<li>fixed problem where the analog joystick (nub) sometimes wouldn't work</li>
<li>added file type detection for DOS <code>.bat</code> and <code>.com</code> files</li>
<li>show black screen when switching video mode, instead of leftover graphics data</li>
<li>screenshots (power + Y) work now for all applications (16 bpp was broken before)</li>
<li>mouse emulation (power + B) works again</li>
<li>gmenu2x can now be controlled by joystick</li>
<li>several graphical cleanups in gmenu2x, also added an animation on tab switching</li>
<li>gmenu2x now shows large SD card capacities in gigabytes instead of megabytes</li>
<li>reduced key repeat rate in gmenu2x</li>
<li>fixes in the gmenu2x file selector</li>
</ul>

<h2>OpenDingux Release 2013-07-22</h2>
<p>Download: <a href="files/gcw0-update-2013-07-22.opk">OpenDingux Update for GCW Zero</a></p>
<p>Changes:</p>
<ul>
<li>fixed problem where a headphone wouldn't activate if plugged in when an application was already running</li>
<li>completely turn off sound at minimum volume setting</li>
<li>reduced pops when starting and stopping audio</li>
<li>improved file type detection, in particular for data files used by emulators</li>
<li>fixed problem where powering off the device by holding the power slider for 3 seconds didn't work in some situations</li>
<li>gmenu2x will pick up new OPK files (uploaded through FTP, for example) without restarting</li>
<li>the file selector in gmenu2x will accept all files by default</li>
<li>added clock to bottom bar in gmenu2x</li>
</ul>

<h2>OpenDingux Release 2013-07-06</h2>
<p>Download: <a href="files/gcw0-update-2013-07-06.opk">OpenDingux Update for GCW Zero</a></p>
<p>Changes:</p>
<ul>
<li>improved video performance (enabled framebuffer caching)</li>
<li>made vsync more robust (eliminated glitches on page flipping)</li>
<li>made the FTP server list hidden files (names starting with a dot)</li>
<li>improved Unicode support in both gmenu2x and command line tools</li>
<li>fixed bug that powered off the system if the power slider was raised, released, then raised again soon after</li>
<li>list IP addresses in System Info application</li>
<li>added unrar command line tool</li>
<li>added shared memory support (allows more applications to be ported)</li>
</ul>

<h2>How it works</h2>

<p>
First make sure you have a backup of all valuable user data you have on your GCW Zero, such as save games.
</p>

<p>
Download the most recent updater application above. Transfer the application (OPK file) to the <code>apps/</code> directory on your GCW Zero. Then start the application from the menu:
</p>
<ul class="gallery">
<li><img src="images/update/menu.png"></li>
<li><img src="images/update/notice.png"></li>
</ul>
<p>
You can select an option with the d-pad and confirm your choice with the <span style="font-variant: small-caps;">start</span> button.
</p>
<p>
While the update is in progress, you'll see progress information being printed showing what the updater is doing. The update process takes a few minutes, please be patient while it does its work, even if you don't see anything happening for a while on the screen. The output should look like this:
</p>
<ul class="gallery">
<li><img src="images/update/progress.png"></li>
<li><img src="images/update/done.png"></li>
</ul>
<p>
When you press <span style="font-variant: small-caps;">start</span> again, the system will restart. After the restart you can check that the new kernel and rootfs were installed in the System Info application:
</p>
<ul class="gallery">
<li><img src="images/update/menu-systeminfo.png"></li>
<li><img src="images/update/systeminfo.png"></li>
</ul>
<p>
The compile date for the kernel and rootfs should be equal to or very close to the date of the updater application.
</p>
<p>
After the update is complete, you can remove the updater application (OPK file).
</p>

</div>

<?php
include "includes/footer.php";
?>
