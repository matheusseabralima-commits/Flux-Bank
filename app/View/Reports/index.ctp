<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <title>Relatórios</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script> tailwind.config = { theme: { extend: { colors: { "primary": "#135bec" } } } } </script>
</head>
<body class="bg-[#111722] text-white font-sans overflow-hidden">
<div class="flex h-screen w-full">
    <?php echo $this->element('sidebar'); ?>
    
    <div class="flex flex-col flex-1 min-w-0 bg-[#111722] overflow-hidden relative">
        <header class="flex items-center justify-between border-b border-[#232f48] px-6 py-4">
            <h2 class="text-white text-lg font-bold">Relatórios Gerenciais</h2>
        </header>

        <main class="flex-1 overflow-y-auto p-8">
            <div class="bg-[#1a2332] p-4 rounded-xl border border-[#232f48] mb-8 flex flex-wrap gap-4 items-end">
                <div class="flex-1 min-w-[200px]">
                    <label class="text-xs text-[#92a4c9] mb-1 block">Data Inicial</label>
                    <input type="date" class="w-full bg-[#111722] border border-[#232f48] rounded px-3 py-2 text-white">
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label class="text-xs text-[#92a4c9] mb-1 block">Data Final</label>
                    <input type="date" class="w-full bg-[#111722] border border-[#232f48] rounded px-3 py-2 text-white">
                </div>
                <button class="bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded font-medium h-[42px]">
                    Filtrar
                </button>
            </div>

            <h3 class="text-[#92a4c9] text-sm uppercase font-bold mb-4 tracking-wider">Disponíveis para Download</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group bg-[#1a2332] p-6 rounded-xl border border-[#232f48] hover:border-primary transition-colors cursor-pointer">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="p-3 rounded-lg bg-blue-500/10 text-blue-500">
                            <span class="material-symbols-outlined">bar_chart</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Desempenho Geral</h4>
                            <p class="text-xs text-[#92a4c9]">Produção por Regional</p>
                        </div>
                    </div>
                    <div class="border-t border-[#232f48] pt-4 flex justify-between">
                        <span class="text-xs text-[#92a4c9]">PDF • Excel</span>
                        <span class="material-symbols-outlined text-[#92a4c9] group-hover:text-primary">download</span>
                    </div>
                </div>

                <div class="group bg-[#1a2332] p-6 rounded-xl border border-[#232f48] hover:border-primary transition-colors cursor-pointer">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="p-3 rounded-lg bg-green-500/10 text-green-500">
                            <span class="material-symbols-outlined">payments</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Comissões Pagas</h4>
                            <p class="text-xs text-[#92a4c9]">Extrato financeiro</p>
                        </div>
                    </div>
                    <div class="border-t border-[#232f48] pt-4 flex justify-between">
                        <span class="text-xs text-[#92a4c9]">Excel • CSV</span>
                        <span class="material-symbols-outlined text-[#92a4c9] group-hover:text-primary">download</span>
                    </div>
                </div>

                <div class="group bg-[#1a2332] p-6 rounded-xl border border-[#232f48] hover:border-primary transition-colors cursor-pointer">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="p-3 rounded-lg bg-purple-500/10 text-purple-500">
                            <span class="material-symbols-outlined">group</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Novos Cadastros</h4>
                            <p class="text-xs text-[#92a4c9]">Corbans ativos vs inativos</p>
                        </div>
                    </div>
                    <div class="border-t border-[#232f48] pt-4 flex justify-between">
                        <span class="text-xs text-[#92a4c9]">PDF</span>
                        <span class="material-symbols-outlined text-[#92a4c9] group-hover:text-primary">download</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>