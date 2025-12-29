<!DOCTYPE html>
<html class="dark" lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login - Gestão de Vendas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-[#111722] text-white h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-[#1a2332] border border-[#232f48] rounded-xl shadow-2xl overflow-hidden">
        
        <div class="p-8 pb-0 text-center">
            <div class="size-12 bg-[#135bec] rounded-lg flex items-center justify-center mx-auto mb-4 text-white">
                <span class="material-symbols-outlined text-[24px]">trending_up</span>
            </div>
            <h3 class="text-2xl font-bold text-white mb-1">Bem-vindo de volta</h3>
            <p class="text-[#92a4c9] text-sm">Insira suas credenciais para acessar o painel.</p>
        </div>

        <div class="p-8">
            <?php echo $this->Flash->render(); ?>
            <?php if ($this->Session->check('Message.auth')): ?>
                <div class="bg-red-500/10 border border-red-500/20 rounded-lg p-3 mb-6 flex items-center gap-2 text-red-500 text-sm">
                    <span class="material-symbols-outlined text-[18px]">error</span>
                    <?php echo $this->Session->flash('auth'); ?>
                </div>
            <?php endif; ?>

            <?php echo $this->Form->create('User', array('url' => array('action' => 'login'), 'class' => 'flex flex-col gap-4')); ?>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-[#92a4c9] uppercase tracking-wider">Usuário</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#92a4c9]">
                            <span class="material-symbols-outlined text-[20px]">person</span>
                        </div>
                        <?php echo $this->Form->input('username', array(
                            'label' => false, 'div' => false,
                            'class' => 'w-full bg-[#111722] text-white border border-[#232f48] rounded-lg py-2.5 pl-10 pr-4 focus:outline-none focus:border-[#135bec] focus:ring-1 focus:ring-[#135bec] transition-all placeholder-[#4b5563]',
                            'placeholder' => 'Seu usuário de acesso',
                            'autofocus' => true
                        )); ?>
                    </div>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-[#92a4c9] uppercase tracking-wider">Senha</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#92a4c9]">
                            <span class="material-symbols-outlined text-[20px]">lock</span>
                        </div>
                        <?php echo $this->Form->input('password', array(
                            'label' => false, 'div' => false,
                            'class' => 'w-full bg-[#111722] text-white border border-[#232f48] rounded-lg py-2.5 pl-10 pr-10 focus:outline-none focus:border-[#135bec] focus:ring-1 focus:ring-[#135bec] transition-all placeholder-[#4b5563]',
                            'placeholder' => '••••••••',
                            'id' => 'UserPassword'
                        )); ?>
                        <button type="button" onclick="togglePassword('UserPassword', 'iconLogin')" class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer text-[#92a4c9] hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-[20px]" id="iconLogin">visibility</span>
                        </button>
                    </div>
                </div>

                <button type="submit" class="mt-2 w-full bg-[#135bec] hover:bg-blue-600 text-white font-bold py-3 rounded-lg transition-colors shadow-lg shadow-blue-900/20">
                    ACESSAR SISTEMA
                </button>

            <?php echo $this->Form->end(); ?>
        </div>

        <div class="bg-[#111722]/50 border-t border-[#232f48] p-4 text-center">
            <p class="text-[#92a4c9] text-sm">
                Não tem conta? 
                <a href="<?php echo $this->Html->url(['action' => 'add']); ?>" class="text-[#135bec] font-bold hover:underline">
                    Criar nova conta
                </a>
            </p>
        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === "password") {
                input.type = "text";
                icon.textContent = "visibility_off";
            } else {
                input.type = "password";
                icon.textContent = "visibility";
            }
        }
    </script>
</body>
</html>