<div class="image-upload p-4 border rounded w-full max-w-md">
    <!-- 左上のファイル選択ボタン -->
    <div class="mb-2">
        <label for="{{ $id }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
            ファイルを選択
        </label>
        <input type="file" name="{{ $name }}" id="{{ $id }}" accept=".png,.jpeg,.jpg" class="hidden"
               onchange="updateFileName(event, '{{ $id }}_filename', '{{ $id }}_preview')">
    </div>

    <!-- 赤文字の注意文 -->
    <div class="text-red-600 text-sm mb-4">
        <p>商品画像を登録してください</p>
        <p>.png または .jpeg 形式でアップロードしてください</p>
    </div>

    <!-- 商品画像プレビュー -->
    <div class="mb-4">
        <img id="{{ $id }}_preview" src="{{ $preview ?? '' }}" alt="プレビュー"
             class="w-full max-w-xs max-h-60 {{ $preview ? '' : 'hidden' }}">
    </div>

    <!-- 左下のボタン + ファイル名 -->
    <div class="flex items-center">
        <label for="{{ $id }}" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
            ファイルを選択
        </label>
        <span id="{{ $id }}_filename" class="ml-2 text-gray-400 text-sm">
            {{ $filename }}
        </span>
    </div>

    <!-- バリデーションエラー -->
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<script>
function updateFileName(event, filenameId, previewId) {
    const input = event.target;
    const filenameSpan = document.getElementById(filenameId);
    const preview = document.getElementById(previewId);

    if (input.files && input.files[0]) {
        // ファイル名表示
        filenameSpan.textContent = input.files[0].name;
        filenameSpan.classList.remove('text-gray-400');

        // プレビュー表示
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('hidden');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
