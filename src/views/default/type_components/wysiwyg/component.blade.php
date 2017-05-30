<script type="text/javascript">
$(document).ready(function() {
	tinymce.init({
		selector: '#textarea_{{$name}}',
		language: 'de_DE',
		directionality: 'rtl',
		height: 500,
		theme: 'modern',
		plugins: [
			'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons paste textcolor colorpicker textpattern imagetools codesample toc help'
		],
		toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
		image_advtab: true,
		content_css: [
			'//fonts.googleapis.com/css?family=David+Libre:400,500,700&amp;subset=hebrew'
		]
	});

})
</script>
<div class='form-group' id='form-group-{{$name}}' style="{{@$form['style']}}">
	<label class='control-label col-sm-2'>{{$form['label']}}</label>

	<div class="{{$col_width?:'col-sm-10'}}">
		<textarea id='textarea_{{$name}}' id="{{$name}}" {{$required}} {{$readonly}} {{$disabled}} name="{{$form['name']}}" class='form-control' rows='5'>{{ $value }}</textarea>
		<div class="text-danger">{{ $errors->first($name) }}</div>
		<p class='help-block'>{{ @$form['help'] }}</p>
	</div>
</div>
