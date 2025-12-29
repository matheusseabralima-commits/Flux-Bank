<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <title>Configurações</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script> tailwind.config = { theme: { extend: { colors: { "primary": "#135bec" } } } } </script>
</head>
<body class="bg-[#111722] text-white font-sans overflow-hidden">
<div class="flex h-screen w-full">
    <?php echo $this->element('sidebar'); ?>
    
    <div class="flex flex-col flex-1 min-w-0 bg-[#111722] overflow-hidden relative">
        <header class="border-b border-[#232f48] px-6 py-4">
            <h2 class="text-white text-lg font-bold">Configurações do Sistema</h2>
        </header>

        <main class="flex-1 overflow-y-auto p-8">
            <div class="max-w-4xl mx-auto flex flex-col gap-8">
                
                <div class="bg-[#1a2332] p-8 rounded-xl border border-[#232f48]">
                    <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">person</span>
                        Meu Perfil
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[#92a4c9] text-sm mb-2">Nome de Exibição</label>
                            <input type="text" value="Administrador" class="w-full bg-[#111722] border border-[#232f48] rounded px-4 py-3 text-white focus:border-primary outline-none">
                        </div>
                        <div>
                            <label class="block text-[#92a4c9] text-sm mb-2">E-mail</label>
                            <input type="email" value="admin@empresa.com" class="w-full bg-[#111722] border border-[#232f48] rounded px-4 py-3 text-white focus:border-primary outline-none">
                        </div>
                    </div>
                </div>

                <div class="bg-[#1a2332] p-8 rounded-xl border border-[#232f48]">
                    <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">tune</span>
                        Preferências do Sistema
                    </h3>
                    
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center justify-between p-4 border border-[#232f48] rounded-lg bg-[#111722]">
                            <div>
                                <h4 class="font-medium">Notificações por E-mail</h4>
                                <p class="text-xs text-[#92a4c9]">Receber resumo semanal de vendas</p>
                            </div>
                            <div class="w-12 h-6 bg-primary rounded-full relative cursor-pointer">
                                <div class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full shadow"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 border border-[#232f48] rounded-lg bg-[#111722]">
                            <div>
                                <h4 class="font-medium">Modo Manutenção</h4>
                                <p class="text-xs text-[#92a4c9]">Impedir acesso de usuários comuns</p>
                            </div>
                            <div class="w-12 h-6 bg-[#232f48] rounded-full relative cursor-pointer">
                                <div class="absolute left-1 top-1 w-4 h-4 bg-[#92a4c9] rounded-full shadow"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-4 border-t border-[#232f48] flex justify-end">
                        <button class="bg-primary hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-bold transition-colors">
                            Salvar Alterações
                        </button>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
</body>
</html>