<?php if ( $page['header'] ): ?>
    <div id="header" class="header">
		<?php print  render( $page['header'] ); ?>
    </div>
<?php endif; ?>
<?php if ( $page['sidebar_first'] ): ?>
    <div id="sidebar-first" class="sidebar">
		<?php print  render( $page['sidebar_first'] ); ?>
    </div>
<?php endif; ?>
<?php if ( $page['content'] ): ?>
    <div class="main-content">
		<?php print  render( $page['content'] ); ?>
    </div>
<?php endif; ?>
<?php if ( $page['footer'] ): ?>
    <div class="main-footer">
		<?php print  render( $page['footer'] ); ?>
    </div>
<?php endif; ?>
