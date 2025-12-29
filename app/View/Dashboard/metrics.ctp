<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: { extend: { colors: { "primary": "#135bec" }, fontFamily: { "display": ["Inter", "sans-serif"] } } }
        }
    </script>
</head>
<body class="bg-[#111722] text-white font-display overflow-hidden">
<div class="flex h-screen w-full">
    
    <?php echo $this->element('sidebar'); ?>
    
    <div class="flex flex-col flex-1 min-w-0 bg-[#111722] overflow-hidden relative">
        <header class="flex items-center justify-between border-b border-[#232f48] px-6 py-4 bg-[#111722]/95 backdrop-blur-sm z-20">
            <h2 class="text-white text-lg font-bold">Visão Geral</h2>
            
            <div class="flex items-center gap-4">
                <a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'logout']); ?>" 
                   class="flex items-center gap-2 text-sm text-[#92a4c9] hover:text-red-400 transition-colors border border-[#232f48] hover:border-red-400/30 rounded-lg px-3 py-2">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    <span>Sair</span>
                </a>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div class="flex flex-col gap-2 rounded-xl p-5 border border-[#232f48] bg-[#1a2332]">
                    <div class="flex justify-between items-start">
                        <p class="text-[#92a4c9] text-sm font-medium">Volume Total</p>
                        <span class="material-symbols-outlined text-[#135bec]">bar_chart</span>
                    </div>
                    <p class="text-white text-2xl font-bold">R$ <?php echo number_format((isset($totalVolume) ? $totalVolume : 0), 2, ',', '.'); ?></p>
                </div>
                 <div class="flex flex-col gap-2 rounded-xl p-5 border border-[#232f48] bg-[#1a2332]">
                    <div class="flex justify-between items-start">
                         <p class="text-[#92a4c9] text-sm font-medium">Correspondentes</p>
                         <span class="material-symbols-outlined text-green-500">groups</span>
                    </div>
                    <p class="text-white text-2xl font-bold"><?php echo isset($totalCorbans) ? $totalCorbans : 0; ?></p>
                </div>
            </div>

            <div class="bg-[#1a2332] rounded-xl border border-[#232f48] overflow-hidden">
                <div class="p-5 border-b border-[#232f48]">
                    <h3 class="font-bold text-white">Top Performance</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-[#232f48]/50 text-[#92a4c9]">
                            <tr>
                                <th class="p-4 font-medium">Nome</th>
                                <th class="p-4 font-medium text-right">Volume</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#232f48]">
                            <?php if (!empty($corbans)): ?>
                                <?php foreach ($corbans as $c): ?>
                                <tr class="hover:bg-[#232f48]/30">
                                    <td class="p-4 text-white"><?php echo h($c['Corban']['nome']); ?></td>
                                    <td class="p-4 text-right font-bold text-white">R$ <?php echo number_format($c['Corban']['volume'], 2, ',', '.'); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="2" class="p-4 text-center text-[#92a4c9]">Nenhum dado encontrado.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>