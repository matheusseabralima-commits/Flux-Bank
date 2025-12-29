<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <title>Comissões</title>
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
            <h2 class="text-white text-lg font-bold">Gestão de Comissões</h2>
            <button class="bg-primary hover:bg-blue-600 px-4 py-2 rounded text-sm font-bold">Nova Apuração</button>
        </header>

        <main class="flex-1 overflow-y-auto p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-[#1a2332] p-6 rounded-xl border border-[#232f48]">
                    <p class="text-[#92a4c9] text-sm mb-1">Pago este Mês</p>
                    <h3 class="text-2xl font-bold text-green-400">R$ 45.230,00</h3>
                </div>
                <div class="bg-[#1a2332] p-6 rounded-xl border border-[#232f48]">
                    <p class="text-[#92a4c9] text-sm mb-1">Pendente</p>
                    <h3 class="text-2xl font-bold text-yellow-400">R$ 12.150,00</h3>
                </div>
                <div class="bg-[#1a2332] p-6 rounded-xl border border-[#232f48]">
                    <p class="text-[#92a4c9] text-sm mb-1">Próximo Pagamento</p>
                    <h3 class="text-2xl font-bold text-white">05/11/2024</h3>
                </div>
            </div>

            <div class="bg-[#1a2332] rounded-xl border border-[#232f48] overflow-hidden">
                <div class="p-4 border-b border-[#232f48] flex justify-between items-center">
                    <h3 class="font-bold">Histórico de Pagamentos</h3>
                </div>
                <table class="w-full text-left text-sm">
                    <thead class="bg-[#232f48] text-[#92a4c9]">
                        <tr>
                            <th class="p-4">Referência</th>
                            <th class="p-4">Beneficiário</th>
                            <th class="p-4 text-center">Status</th>
                            <th class="p-4 text-right">Valor</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#232f48]">
                        <tr class="hover:bg-[#232f48]/50">
                            <td class="p-4">OUT/2024</td>
                            <td class="p-4">João Silva (Norte)</td>
                            <td class="p-4 text-center"><span class="bg-green-500/10 text-green-500 px-2 py-1 rounded text-xs">Pago</span></td>
                            <td class="p-4 text-right">R$ 5.200,00</td>
                        </tr>
                        <tr class="hover:bg-[#232f48]/50">
                            <td class="p-4">OUT/2024</td>
                            <td class="p-4">Maria Oliveira (Sul)</td>
                            <td class="p-4 text-center"><span class="bg-yellow-500/10 text-yellow-500 px-2 py-1 rounded text-xs">Pendente</span></td>
                            <td class="p-4 text-right">R$ 3.150,00</td>
                        </tr>
                        <tr class="hover:bg-[#232f48]/50">
                            <td class="p-4">OUT/2024</td>
                            <td class="p-4">Carlos Souza (Leste)</td>
                            <td class="p-4 text-center"><span class="bg-green-500/10 text-green-500 px-2 py-1 rounded text-xs">Pago</span></td>
                            <td class="p-4 text-right">R$ 4.800,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>