<div class="container mx-auto px-2">
	<div class="mx-auto bg-slate-200 rounded-3xl max-w-md py-14 flex flex-col items-center justify-between gap-10 shadow-md">

		<img src="assets/img/vertical_lite_svg.svg" alt="Logo UniReport" class="w-24 sm:w-36 justify-self-start">
		<p class="text-xl">Relatar problema em <strong class="text-blue-800">Labolatório 4</strong></p>

		<form action="<?= url_to('Home.insert'); ?>" method="post" enctype="multipart/form-data" class="">
			<div class="grid gap-8">
				<div class="flex flex-col bg-white p-4 rounded-3xl shadow-xl">
					<label for="textarea" class="font-medium text-gray-500 pb-2 cursor-pointer">Descrição do problema</label>
					<textarea name="mensagem" id="textarea" cols="30" rows="1" class="outline-none px-2 focus:outline-2 focus:outline-blue-200 rounded-xl transition-all text-gray-500 cursor-pointer" placeholder=". . ." required></textarea>
				</div>

				<div class="flex flex-col bg-white p-4 rounded-3xl shadow-xl">
					<label for="" class="font-medium text-gray-500 mb-2">Foto ou Vídeo (opcional)</label>

					<label for="fileInput" class="bg-sky-100 hover:bg-slate-200 text-blue-800 font-medium py-2 px-4 text-sm rounded-full cursor-pointer relative transition-all overflow-hidden max-w-md">
						<span class="block truncate w-64" id="fileLabel">Selecione o arquivo</span>
						<input type="file" name="arquivo_media" id="fileInput" class="hidden" accept=".pdf, .jpg, .png" onchange="updateFileName()">
					</label>
				</div>
			</div>

			<button type="submit" class="py-4 w-full bg-gradient-to-tr from-blue-950 to-blue-800 rounded-full text-white font-semibold mt-8 hover:bg-blue-900 transition-all shadow-xl hover:shadow-slate-500">Enviar</button>
		</form>
	</div>
</div>

<script>
	const textarea = document.getElementById('textarea');

	textarea.addEventListener('input', function() {
		this.style.height = 'auto'; // Reset a altura do textarea para o valor padrão
		this.style.height = (this.scrollHeight) + 'px'; // Ajusta a altura para se adequar ao conteúdo
	});


	function updateFileName() {
		const fileInput = document.getElementById('fileInput');
		const fileLabel = document.getElementById('fileLabel');

		if (fileInput.files.length > 0) {
			fileLabel.textContent = fileInput.files[0].name;
		} else {
			fileLabel.textContent = 'Escolha um arquivo';
		}
	}
</script>
</body>


</html>