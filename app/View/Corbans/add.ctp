<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <title>Novo Corban</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script> tailwind.config = { theme: { extend: { colors: { "primary": "#135bec" } } } } </script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body class="bg-[#111722] text-white font-sans overflow-hidden">
<div class="flex h-screen w-full">
    <?php echo $this->element('sidebar'); ?>
    <div class="flex flex-col flex-1 bg-[#111722] overflow-y-auto">
        <header class="border-b border-[#232f48] px-6 py-4">
            <h2 class="text-lg font-bold">Novo Correspondente</h2>
        </header>
        <main class="p-8">
            <div class="max-w-2xl mx-auto bg-[#1a2332] p-6 rounded-xl border border-[#232f48]">
                <?php echo $this->Form->create('Corban'); ?>
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <label class="block text-[#92a4c9] text-sm mb-1">Nome</label>
                        <input name="data[Corban][nome]" type="text" class="w-full p-2 bg-[#111722] border border-[#232f48] rounded text-white" required>
                    </div>
                    <div>
                        <label class="block text-[#92a4c9] text-sm mb-1">Regional</label>
                        <select name="data[Corban][regional]" class="w-full p-2 bg-[#111722] border border-[#232f48] rounded text-white">
                            <option>Norte</option><option>Sul</option><option>Leste</option><option>Oeste</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[#92a4c9] text-sm mb-1">Status</label>
                        <select name="data[Corban][status]" class="w-full p-2 bg-[#111722] border border-[#232f48] rounded text-white">
                            <option>Subindo</option><option>Estável</option><option>Queda</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[#92a4c9] text-sm mb-1">Volume (R$)</label>
                        <input name="data[Corban][volume]" type="number" step="0.01" class="w-full p-2 bg-[#111722] border border-[#232f48] rounded text-white">
                    </div>
                    <div>
                        <label class="block text-[#92a4c9] text-sm mb-1">Meta %</label>
                        <input name="data[Corban][meta_percent]" type="number" class="w-full p-2 bg-[#111722] border border-[#232f48] rounded text-white">
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="bg-primary hover:bg-blue-600 px-6 py-2 rounded text-white font-bold">Salvar</button>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </main>
    </div>
</div>
</body>
</html>