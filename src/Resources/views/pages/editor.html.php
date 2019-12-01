<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <base href="">
    <title>160 | <?=  $company_name ?></title>
    
    <link href="<?= $view['assets']->getUrl('/assets/css/editor.css') ?>" rel="stylesheet">
    <link href="<?= $view['assets']->getUrl('/assets/css/line-awesome.css') ?>" rel="stylesheet">
  </head>
<body>


	<div id="vvveb-builder">
				
				<div id="top-panel">
					<img src="<?= $view['assets']->getUrl('/assets/img/logo.png') ?>" alt="Vvveb" class="float-left" id="logo">
					
					
					<div class="btn-group float-left" role="group">
					  <button class="btn btn-light" title="Toggle file manager" id="toggle-file-manager-btn" data-vvveb-action="toggleFileManager" data-toggle="button" aria-pressed="false">
						  <img src="<?= $view['assets']->getUrl('/assets/libs/builder/icons/file-manager-layout.svg') ?>" width="20px" height="20px">
					  </button>

					  <button class="btn btn-light" title="Toggle left column" id="toggle-left-column-btn" data-vvveb-action="toggleLeftColumn" data-toggle="button" aria-pressed="false">
						  <img src="<?= $view['assets']->getUrl('/assets/libs/builder/icons/left-column-layout.svg') ?>" width="20px" height="20px">
					  </button>
					  
					  <button class="btn btn-light" title="Toggle right column" id="toggle-right-column-btn" data-vvveb-action="toggleRightColumn" data-toggle="button" aria-pressed="false">
						  <img src="<?= $view['assets']->getUrl('/assets/libs/builder/icons/right-column-layout.svg') ?>" width="20px" height="20px">
					  </button>
					</div>
										
					<div class="btn-group mr-3" role="group">
					  <button class="btn btn-light" title="Undo (Ctrl/Cmd + Z)" id="undo-btn" data-vvveb-action="undo" data-vvveb-shortcut="ctrl+z">
						  <i class="la la-undo"></i>
					  </button>

					  <button class="btn btn-light"  title="Redo (Ctrl/Cmd + Shift + Z)" id="redo-btn" data-vvveb-action="redo" data-vvveb-shortcut="ctrl+shift+z">
						  <i class="la la-undo la-flip-horizontal"></i>
					  </button>
					</div>
										
					
					<div class="btn-group mr-3" role="group">
					  <button class="btn btn-light" title="Designer Mode (Free component dragging)" id="designer-mode-btn" data-toggle="button" aria-pressed="false" data-vvveb-action="setDesignerMode">
						  <i class="la la-hand-grab-o"></i>
					  </button>

					  <button class="btn btn-light" title="Preview" id="preview-btn" type="button" data-toggle="button" aria-pressed="false" data-vvveb-action="preview">
						  <i class="la la-eye"></i>
					  </button>

					  <button class="btn btn-light" title="Fullscreen (F11)" id="fullscreen-btn" data-toggle="button" aria-pressed="false" data-vvveb-action="fullscreen">
						  <i class="la la-arrows"></i>
					  </button>

					</div>
					
					<div class="btn-group mr-3" role="group">
					  <button class="btn btn-light" title="Export (Ctrl + E)" id="save-btn" data-page="<?= $title_page ?>" data-sitename="<?= $company_name ?>" data-vvveb-action="saveAjax" data-vvveb-shortcut="ctrl+e">
						  <i class="la la-save"></i>
					  </button>
					  
					  <button class="btn btn-light" title="Download" id="download-btn" data-vvveb-action="download" data-download="index.html">
						  <i class="la la-download"></i>
					  </button>
					</div>	


					<div class="btn-group float-right responsive-btns" role="group">
		 			 <button id="mobile-view" data-view="mobile" class="btn btn-light"  title="Mobile view" data-vvveb-action="viewport">
						  <i class="la la-mobile-phone"></i>
					  </button>

					  <button id="tablet-view"  data-view="tablet" class="btn btn-light"  title="Tablet view" data-vvveb-action="viewport">
						  <i class="la la-tablet"></i>
					  </button>
					  
					  <button id="desktop-view"  data-view="" class="btn btn-light"  title="Desktop view" data-vvveb-action="viewport">
						  <i class="la la-laptop"></i>
					  </button>

					</div>
										
				</div>	
				
				<div id="left-panel"> 
				<div id="filemanager"> 
							<div class="header">
								<a href="#" class="text-secondary">Pages</a>

									<div class="btn-group responsive-btns mr-4 float-right" role="group">
									  <button class="btn btn-link btn-sm" title="New file" id="new-file-btn" data-vvveb-action="newPage" data-vvveb-shortcut="">
										  <i class="la la-file"></i> <small>New page</small>
									  </button>
									  
									  <!--  &ensp;
									  <button class="btn btn-link text-dark p-0"  title="Delete file" id="delete-file-btn" data-vvveb-action="deletePage" data-vvveb-shortcut="">
										  <i class="la la-trash"></i> <small>Delete</small>
									  </button> -->
									</div>

								</div>

								<div class="tree">
									<ol>
									</ol>
								</div>
					  </div>
					  <div class="drag-elements">

						<div class="header">							
							<ul class="nav nav-tabs" id="elements-tabs" role="tablist">
							  <li class="nav-item component-tab">
								<a class="nav-link active" id="components-tab" data-toggle="tab" href="#components" role="tab" aria-controls="components" aria-selected="true"><i class="la la-lg la-cube"></i> <div><small>Components</small></div></a>
							  </li>
							  <li class="nav-item blocks-tab">
								<a class="nav-link" id="blocks-tab" data-toggle="tab" href="#blocks" role="tab" aria-controls="blocks" aria-selected="false"><i class="la la-lg la-image"></i> <div><small>Blocks</small></div></a>
							  </li>
							  <li class="nav-item component-properties-tab" style="display:none">
								<a class="nav-link" id="properties-tab" data-toggle="tab" href="#properties" role="tab" aria-controls="blocks" aria-selected="false"><i class="la la-lg la-cog"></i> <div><small>Properties</small></div></a>
							  </li>
							</ul>
					
							<div class="tab-content">
							  <div class="tab-pane fade show active" id="components" role="tabpanel" aria-labelledby="components-tab">
								  
								   <div class="search">
										  <input class="form-control form-control-sm component-search" placeholder="Search components" type="text" data-vvveb-action="componentSearch" data-vvveb-on="keyup">
										  <button class="clear-backspace"  data-vvveb-action="clearComponentSearch">
											  <i class="la la-close"></i>
										  </button>
									  </div>

									<div class="drag-elements-sidepane sidepane">
									  <div>
										  
										<ul class="components-list clearfix" data-type="leftpanel">
										</ul>

									  </div>
									</div>
							  
							  </div>
							  <div class="tab-pane fade" id="blocks" role="tabpanel" aria-labelledby="blocks-tab">
								  
								   <div class="search">
										  <input class="form-control form-control-sm block-search" placeholder="Search blocks" type="text" data-vvveb-action="blockSearch" data-vvveb-on="keyup">
										  <button class="clear-backspace"  data-vvveb-action="clearBlockSearch">
											  <i class="la la-close"></i>
										  </button>
									  </div>

									<div class="drag-elements-sidepane sidepane">
									  <div>
										  
										<ul class="blocks-list clearfix" data-type="leftpanel">
										</ul>

									  </div>
									</div>
							  
							  </div>
							
								<div class="tab-pane fade" id="properties" role="tabpanel" aria-labelledby="blocks-tab">
									<div class="component-properties-sidepane">
										<div>
											<div class="component-properties">
												<ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
													  <li class="nav-item content-tab">
														<a class="nav-link active" data-toggle="tab" href="#content-left-panel-tab" role="tab" aria-controls="components" aria-selected="true">
															<i class="la la-lg la-cube"></i> <div><span>Content</span></div></a>
													  </li>
													  <li class="nav-item style-tab">
														<a class="nav-link" data-toggle="tab" href="#style-left-panel-tab" role="tab" aria-controls="blocks" aria-selected="false">
															<i class="la la-lg la-image"></i> <div><span>Style</span></div></a>
													  </li>
													  <li class="nav-item advanced-tab">
														<a class="nav-link" data-toggle="tab" href="#advanced-left-panel-tab" role="tab" aria-controls="blocks" aria-selected="false">
															<i class="la la-lg la-cog"></i> <div><span>Advanced</span></div></a>
													  </li>
													</ul>
											
													<div class="tab-content">
														 <div class="tab-pane fade show active" id="content-left-panel-tab" data-section="content" role="tabpanel" aria-labelledby="content-tab">
															<div class="mt-4 text-center">Click on an element to edit.</div>
														</div>
														
														 <div class="tab-pane fade show" id="style-left-panel-tab" data-section="style" role="tabpanel" aria-labelledby="style-tab">
														</div>
														
														 <div class="tab-pane fade show" id="advanced-left-panel-tab" data-section="advanced"  role="tabpanel" aria-labelledby="advanced-tab">
														</div>
													</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>							

					  </div>
				</div>	


				<div id="canvas">
					<div id="iframe-wrapper">
						<div id="iframe-layer">
							
							<div id="highlight-box">
								<div id="highlight-name"></div>
								
								<div id="section-actions">
									<a id="add-section-btn" href="" title="Add element"><i class="la la-plus"></i></a>
								</div>
							</div>

							<div id="select-box">

								<div id="wysiwyg-editor">
										<a id="bold-btn" href="" title="Bold"><i><strong>B</strong></i></a>
										<a id="italic-btn" href="" title="Italic"><i>I</i></a>
										<a id="underline-btn" href="" title="Underline"><u>u</u></a>
										<a id="strike-btn" href="" title="Strikeout"><del>S</del></a>
										<a id="link-btn" href="" title="Create link"><strong>a</strong></a>
								</div>

								<div id="select-actions">
									<a id="drag-btn" href="" title="Drag element"><i class="la la-arrows"></i></a>
									<a id="parent-btn" href="" title="Select parent"><i class="la la-level-down la-rotate-180"></i></a>
									
									<a id="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
									<a id="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
									<a id="clone-btn" href="" title="Clone element"><i class="la la-copy"></i></a>
									<a id="delete-btn" href="" title="Remove element"><i class="la la-trash"></i></a>
								</div>
							</div>
							
							<!-- add section box -->
							<div id="add-section-box" class="drag-elements">

									<div class="header">							
										<ul class="nav nav-tabs" id="box-elements-tabs" role="tablist">
										  <li class="nav-item component-tab">
											<a class="nav-link active" id="box-components-tab" data-toggle="tab" href="#box-components" role="tab" aria-controls="components" aria-selected="true"><i class="la la-lg la-cube"></i> <div><small>Components</small></div></a>
										  </li>
										  <li class="nav-item blocks-tab">
											<a class="nav-link" id="box-blocks-tab" data-toggle="tab" href="#box-blocks" role="tab" aria-controls="blocks" aria-selected="false"><i class="la la-lg la-image"></i> <div><small>Blocks</small></div></a>
										  </li>
										  <li class="nav-item component-properties-tab" style="display:none">
											<a class="nav-link" id="box-properties-tab" data-toggle="tab" href="#box-properties" role="tab" aria-controls="blocks" aria-selected="false"><i class="la la-lg la-cog"></i> <div><small>Properties</small></div></a>
										  </li>
										</ul>
										
										<div class="section-box-actions">

											<div id="close-section-btn" class="btn btn-light btn-sm bg-white btn-sm float-right"><i class="la la-close"></i></div>
										
											<div class="small mt-1 mr-3 float-right">
											
												<div class="custom-control custom-radio custom-control-inline">
												  <input type="radio" id="add-section-insert-mode-after" value="after" checked="checked" name="add-section-insert-mode" class="custom-control-input">
												  <label class="custom-control-label" for="add-section-insert-mode-after">After</label>
												</div>
												
												<div class="custom-control custom-radio custom-control-inline">
												  <input type="radio" id="add-section-insert-mode-inside" value="inside" name="add-section-insert-mode" class="custom-control-input">
												  <label class="custom-control-label" for="add-section-insert-mode-inside">Inside</label>
												</div>
										
											</div>
											
										</div>
										
										<div class="tab-content">
										  <div class="tab-pane fade show active" id="box-components" role="tabpanel" aria-labelledby="components-tab">
											  
											   <div class="search">
													  <input class="form-control form-control-sm component-search" placeholder="Search components" type="text" data-vvveb-action="addBoxComponentSearch" data-vvveb-on="keyup">
													  <button class="clear-backspace"  data-vvveb-action="clearComponentSearch">
														  <i class="la la-close"></i>
													  </button>
												  </div>

												<div>
												  <div>
													  
													<ul class="components-list clearfix" data-type="addbox">
													</ul>

												  </div>
												</div>
										  
										  </div>
										  <div class="tab-pane fade" id="box-blocks" role="tabpanel" aria-labelledby="blocks-tab">
											  
											   <div class="search">
													  <input class="form-control form-control-sm block-search" placeholder="Search blocks" type="text" data-vvveb-action="addBoxBlockSearch" data-vvveb-on="keyup">
													  <button class="clear-backspace"  data-vvveb-action="clearBlockSearch">
														  <i class="la la-close"></i>
													  </button>
												  </div>

												<div>
												  <div>
													  
													<ul class="blocks-list clearfix"  data-type="addbox">
													</ul>

												  </div>
												</div>
										  
										  </div>
										
											<!-- div class="tab-pane fade" id="box-properties" role="tabpanel" aria-labelledby="blocks-tab">
												<div class="component-properties-sidepane">
													<div>
														<div class="component-properties">
															<div class="mt-4 text-center">Click on an element to edit.</div>
														</div>
													</div>
												</div>
											</div -->
										</div>
									</div>		

							</div>
							<!-- //add section box -->
						</div>
						<iframe src="about:none" id="iframe1"></iframe>
					</div>
					
					
				</div>

				<div id="right-panel">
					<div class="component-properties">
						
						<ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
							  <li class="nav-item content-tab">
								<a class="nav-link active" data-toggle="tab" href="#content-tab" role="tab" aria-controls="components" aria-selected="true">
									<i class="la la-lg la-cube"></i> <div><span>Content</span></div></a>
							  </li>
							  <li class="nav-item style-tab">
								<a class="nav-link" data-toggle="tab" href="#style-tab" role="tab" aria-controls="blocks" aria-selected="false">
									<i class="la la-lg la-image"></i> <div><span>Style</span></div></a>
							  </li>
							  <li class="nav-item advanced-tab">
								<a class="nav-link" data-toggle="tab" href="#advanced-tab" role="tab" aria-controls="blocks" aria-selected="false">
									<i class="la la-lg la-cog"></i> <div><span>Advanced</span></div></a>
							  </li>
							</ul>
					
							<div class="tab-content">
								 <div class="tab-pane fade show active" id="content-tab" data-section="content" role="tabpanel" aria-labelledby="content-tab">
								</div>
								
								 <div class="tab-pane fade show" id="style-tab" data-section="style" role="tabpanel" aria-labelledby="style-tab">
								</div>
								
								 <div class="tab-pane fade show" id="advanced-tab" data-section="advanced"  role="tabpanel" aria-labelledby="advanced-tab">
								</div>
								
								
							</div>
							
							
							
					</div>
				</div>
				
				<div id="bottom-panel">

				<div class="btn-group" role="group">

		 			 <button id="code-editor-btn" data-view="mobile" class="btn btn-sm btn-light btn-sm"  title="Code editor" data-vvveb-action="toggleEditor">
						  <i class="la la-code"></i> Code editor
					  </button>
					 
						<div id="toggleEditorJsExecute" class="custom-control custom-checkbox mt-1" style="display:none">
							<input type="checkbox" class="custom-control-input" id="customCheck" name="example1" data-vvveb-action="toggleEditorJsExecute">
							<label class="custom-control-label" for="customCheck"><small>Run javascript code on edit</small></label>
						</div>
					</div>
					
					<div id="vvveb-code-editor">
						<textarea class="form-control"></textarea>
					<div>

				</div>	
			</div>
		</div>


<!-- templates --> 
<?= $view->render('pages/scripts.tpl.html') ?>
<!--// end templates -->


<!-- export html modal-->
<div class="modal fade" id="textarea-modal" tabindex="-1" role="dialog" aria-labelledby="textarea-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-primary"><i class="la la-lg la-save"></i> Export html</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><small><i class="la la-close"></i></small></span>
        </button>
      </div>
      <div class="modal-body">
        
        <textarea rows="25" cols="150" class="form-control"></textarea>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="la la-close"></i> Close</button>
      </div>
    </div>
  </div>
</div>

<!-- message modal-->
<div class="modal fade" id="message-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-primary"><i class="la la-lg la-comment"></i> VvvebJs</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><small><i class="la la-close"></i></small></span>
        </button>
      </div>
      <div class="modal-body">
        <p>Page was successfully saved!.</p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Ok</button> -->
        <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="la la-close"></i> Close</button>
      </div>
    </div>
  </div>
</div>

<!-- new page modal-->
<div class="modal fade" id="new-page-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    
    <form>
		
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-primary"><i class="la la-lg la-file"></i> New page</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><small><i class="la la-close"></i></small></span>
        </button>
      </div>

      <div class="modal-body text">
		<div class="form-group row" data-key="type">      
			<label class="col-sm-3 control-label">
				Template 
				<abbr class="badge badge-pill badge-secondary" title="This template will be used as a start">?</abbr> 
			</label>      
			<div class="col-sm-9 input">
				<div>    
					<select class="form-control custom-select" name="startTemplateUrl">        
						<option value="new-page-blank-template.html">Blank Template</option>        
						<option value="demo/narrow-jumbotron/index.html">Narrow jumbotron</option>       
						<option value="demo/album/index.html">Album</option>       
					</select>    
				</div>
			</div>     
		</div>

		<div class="form-group row" data-key="href">     
			 <label class="col-sm-3 control-label">Page name</label>      
			<div class="col-sm-9 input">
				<div>   
					<input name="title" type="text" class="form-control" placeholder="My page" required>  
				</div>
			</div>     
		</div>
		
		<div class="form-group row" data-key="href">     
			 <label class="col-sm-3 control-label">File name</label>      
			<div class="col-sm-9 input">
				<div>   
					<input name="fileName" type="text" class="form-control" placeholder="my-page.html" required>  
				</div>
			</div>     
		</div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary btn-lg" type="submit"><i class="la la-check"></i> Create page</button>
        <button class="btn btn-secondary btn-lg" type="reset" data-dismiss="modal"><i class="la la-close"></i> Cancel</button>
      </div>
    </div>
    
   </form>		

  </div>
</div>
</div>
	
<!-- jquery-->
<script src="<?= $view['assets']->getUrl('/assets/js/jquery.min.js') ?>"></script>
<script src="<?= $view['assets']->getUrl('/assets/js/jquery.hotkeys.js') ?>"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- bootstrap-->
<script src="<?= $view['assets']->getUrl('/assets/js/popper.min.js') ?>"></script>
<script src="<?= $view['assets']->getUrl('/assets/js/bootstrap.min.js') ?>"></script>

<!-- builder code-->
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/builder.js') ?>"></script>	
<!-- undo manager-->
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/undo.js') ?>"></script>	
<!-- inputs-->
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/inputs.js') ?>"></script>	

<!-- bootstrap colorpicker //uncomment bellow scripts to enable -->
<!--
<script src="<?= $view['assets']->getUrl('/assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
<link href="<?= $view['assets']->getUrl('/assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>" rel="stylesheet">
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/plugin-bootstrap-colorpicker.js') ?>"></script>
-->

<!-- components-->
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/components-server.js') ?>"></script>	
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/components-bootstrap4.js') ?>"></script>	
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/components-widgets.js') ?>"></script>	

<!-- blocks-->
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/blocks-bootstrap4.js') ?>"></script>	

<!-- plugins -->

<!-- code mirror - code editor syntax highlight -->
<link href="<?= $view['assets']->getUrl('/assets/libs/codemirror/lib/codemirror.css') ?>" rel="stylesheet"/>
<link href="<?= $view['assets']->getUrl('/assets/libs/codemirror/theme/material.css') ?>" rel="stylesheet"/>
<script src="<?= $view['assets']->getUrl('/assets/libs/codemirror/lib/codemirror.js') ?>"></script>
<script src="<?= $view['assets']->getUrl('/assets/libs/codemirror/lib/xml.js') ?>"></script>
<script src="<?= $view['assets']->getUrl('/assets/libs/codemirror/lib/formatting.js') ?>"></script>
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/plugin-codemirror.js') ?>"></script>	

<!-- jszip - download page as zip -->
<script src="<?= $view['assets']->getUrl('/assets/libs/jszip/jszip.min.js') ?>"></script>
<script src="<?= $view['assets']->getUrl('/assets/libs/builder/plugin-jszip.js') ?>"></script>




<script>
$(document).ready(function() 
{
	//if url has #no-right-panel set one panel demo
	if (window.location.hash.indexOf("no-right-panel") != -1)
	{
		$("#vvveb-builder").addClass("no-right-panel");
		$(".component-properties-tab").show();
		Vvveb.Components.componentPropertiesElement = "#left-panel .component-properties";
	} else
	{
		$(".component-properties-tab").hide();
	}

	Vvveb.Builder.init("<?php print $template_path; ?>", function() {
		
	});

	Vvveb.Gui.init();
	Vvveb.FileManager.init();
	Vvveb.FileManager.addPages(
	[
		{name:"<?php echo ucfirst($title_page);?>", title:"<?php echo ucfirst($title_page);?>",  url: "<?php echo $template_path;?>"},
		
	
	]);
	
	Vvveb.FileManager.loadPage("<?= $title_page ?>");
});
</script>
<script>
	
</script>
</body>
</html>
