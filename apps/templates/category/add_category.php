<h2 class='contentTitle'><?php echo $title; ?></h2>
<div class='pageContent'>
	<form method='post' action='<?= URL('category/addcategory'); ?>' class='pageForm required-validate' onsubmit='return validateCallback(this,navTabAjaxDone)'>
		<div class='pageFormContent nowrap' layoutH='97'>
			
					<dl><dt>分类名称：</dt>
							<dd>
								<input type='text' name='cate_name' maxlength='255'  />
								<span class='info'></span>
							</dd>
					</dl>
					<dl><dt>创建时间：</dt>
							<dd>
								<input type='text' name='ctime' maxlength='11'  />
								<span class='info'></span>
							</dd>
					</dl>
			<div class='divider'></div>
		</div>
		<div class='formBar'>
			<ul>
				<input type='hidden' name='isPost' value='1' />
				<li><div class='buttonActive'><div class='buttonContent'><button type='submit'>提交</button></div></div></li>
				<li><div class='button'><div class='buttonContent'><button type='button' class='close'>取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>