<?php
	defined( 'ABSPATH' ) || exit;
?>

<div class="mfn-modal modal-confirm modal-confirm-reset">
  <div class="mfn-modalbox mfn-form mfn-shadow-1">

    <div class="modalbox-content">

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
        <defs><style>.cls-1{fill:none;stroke:#304050;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}.cls-2{fill:#304050;}.cls-3{opacity:0.2;}</style></defs>
        <path class="cls-1" d="M80,50.5V35.41c0,3.44-15.67,6.23-35,6.23s-35-2.79-35-6.23V54.59c0,3.44,15.67,6.23,35,6.23,4.41,0,8.62-.14,12.5-.41"/><path class="cls-1" d="M45,41.64c19.33,0,35-2.79,35-6.23V16.23c0,3.45-15.67,6.24-35,6.24s-35-2.79-35-6.24V35.41C10,38.85,25.67,41.64,45,41.64Z"/><path class="cls-1" d="M57.5,60.41c-3.88.27-8.09.41-12.5.41-19.33,0-35-2.79-35-6.23V73.77C10,77.21,25.67,80,45,80c4.41,0,8.62-.15,12.5-.41"/><ellipse class="cls-1" cx="45" cy="16.23" rx="35" ry="6.23"/><line class="cls-1" x1="71.5" y1="60.5" x2="93.5" y2="60.5"/><line class="cls-1" x1="71.5" y1="100.5" x2="90.5" y2="100.5"/><line class="cls-1" x1="71.5" y1="68.5" x2="74.5" y2="68.5"/><line class="cls-1" x1="79.5" y1="68.5" x2="106.5" y2="68.5"/><line class="cls-1" x1="71.5" y1="76.5" x2="89.5" y2="76.5"/><line class="cls-1" x1="94.5" y1="76.5" x2="101.5" y2="76.5"/><line class="cls-1" x1="71.5" y1="84.5" x2="76.5" y2="84.5"/><line class="cls-1" x1="81.5" y1="84.5" x2="104.5" y2="84.5"/><line class="cls-1" x1="71.5" y1="92.5" x2="72.5" y2="92.5"/><line class="cls-1" x1="77.5" y1="92.5" x2="91.5" y2="92.5"/><line class="cls-1" x1="96.5" y1="92.5" x2="101.5" y2="92.5"/><circle class="cls-2" cx="65.5" cy="60.5" r="1.5"/><circle class="cls-2" cx="65.5" cy="68.5" r="1.5"/><circle class="cls-2" cx="65.5" cy="76.5" r="1.5"/><circle class="cls-2" cx="65.5" cy="84.5" r="1.5"/><circle class="cls-2" cx="65.5" cy="92.5" r="1.5"/><circle class="cls-2" cx="65.5" cy="100.5" r="1.5"/><polyline class="cls-1" points="104.5 113.5 104.5 101.5 116.5 101.5"/><polygon class="cls-1" points="116.5 101.5 104.5 113.5 57.5 113.5 57.5 50.5 116.5 50.5 116.5 101.5"/>
      </svg>

      <h3>Database reset</h3>

      <div class="modalbox-box active">

        <h6>This tool does NOT create backups</h6>

        <ul class="reset-list">
          <li class="delete"><b>Deletes:</b> Posts, custom posts, pages, menus, categories, comments, etc.</li>
          <li class="keep"><b>Remains:</b> Users and passwords, wp_options, files on your server.</li>
        </ul>

        <div class="select-inner square">
          <span>I understand that there is NO UNDO</span>
        </div>

        <a class="mfn-btn mfn-btn-red btn-fw btn-modal-confirm disabled" href="#"><span class="btn-wrapper"><?php esc_html_e('Delete', 'mfn-opts'); ?></span></a>

      </div>

      <a class="mfn-btn mfn-btn-blue btn-fw btn-modal-skip" href="#"><span class="btn-wrapper"><?php esc_html_e('Skip', 'mfn-opts'); ?></span></a>

    </div>

  </div>
</div>
