<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <title>Correspondentes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script> tailwind.config = { theme: { extend: { colors: { "primary": "#135bec" } } } } </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body class="bg-[#111722] text-white font-['Inter'] overflow-hidden">
<div class="flex h-screen w-full">
    <?php echo $this->element('sidebar'); ?>
    <div class="flex flex-col flex-1 bg-[#111722] overflow-hidden">
        <header class="border-b border-[#232f48] px-6 py-4 flex items-center justify-between">
            <h2 class="text-lg font-bold">Correspondentes</h2>
            <a href="<?php echo $this->Html->url(['action' => 'add']); ?>" class="bg-primary hover:bg-blue-600 px-4 py-2 rounded text-sm font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span> Novo
            </a>
        </header>
        <main class="flex-1 overflow-y-auto p-8">
            <div class="bg-[#1a2332] rounded-xl border border-[#232f48] overflow-hidden">
                <table class="w-full text-left text-sm">
                    <thead class="bg-[#232f48] text-[#92a4c9]">
                        <tr>
                            <th class="p-4">Nome</th>
                            <th class="p-4">Regional</th>
                            <th class="p-4">Status</th>
                            <th class="p-4 text-right">Volume</th>
                            <th class="p-4 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#232f48]">
                        <?php foreach ($corbans as $item): $c = $item['Corban']; ?>
                        <tr class="hover:bg-[#232f48]/50">
                            <td class="p-4 font-bold"><?php echo h($c['nome']); ?></td>
                            <td class="p-4 text-[#92a4c9]"><?php echo h($c['regional']); ?></td>
                            <td class="p-4"><?php echo h($c['status']); ?></td>
                            <td class="p-4 text-right">R$ <?php echo number_format($c['volume'], 2, ',', '.'); ?></td>
                            <td class="p-4 text-center flex justify-center gap-2">
                                <a href="<?php echo $this->Html->url(['action' => 'edit', $c['id']]); ?>" class="text-blue-400 hover:text-white">Editar</a>
                                <?php echo $this->Form->postLink('Excluir', array('action' => 'delete', $c['id']), array('class' => 'text-red-400 hover:text-red-200', 'confirm' => 'Certeza?')); ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>