<?php
$ctrl = $this->request->params['controller'];
$active = 'bg-primary text-white shadow-lg shadow-primary/20';
$inactive = 'text-[#92a4c9] hover:bg-[#232f48] hover:text-white transition-colors';
?>
<div class="hidden lg:flex w-[280px] flex-col border-r border-[#232f48] bg-[#111722] p-4 shrink-0 h-full">
    <div class="flex flex-col gap-4 h-full">
        <div class="flex gap-3 items-center px-2 py-2">
            <div class="bg-gray-700 aspect-square rounded-full size-12 border-2 border-[#232f48]"></div>
            <div class="flex flex-col">
                <h1 class="text-white text-base font-bold">Gestão Vendas</h1>
                <p class="text-[#92a4c9] text-xs">Admin</p>
            </div>
        </div>
        <div class="flex flex-col gap-2 mt-4">
            <a href="<?php echo $this->Html->url(['controller' => 'dashboard', 'action' => 'metrics']); ?>" class="flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium <?php echo ($ctrl == 'dashboard') ? $active : $inactive; ?>">
                <span class="material-symbols-outlined">dashboard</span> Dashboard
            </a>
            <a href="<?php echo $this->Html->url(['controller' => 'corbans', 'action' => 'index']); ?>" class="flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium <?php echo ($ctrl == 'corbans') ? $active : $inactive; ?>">
                <span class="material-symbols-outlined">group</span> Correspondentes
            </a>
            <a href="<?php echo $this->Html->url(['controller' => 'reports', 'action' => 'index']); ?>" class="flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium <?php echo ($ctrl == 'reports') ? $active : $inactive; ?>">
                <span class="material-symbols-outlined">description</span> Relatórios
            </a>
            <a href="<?php echo $this->Html->url(['controller' => 'commissions', 'action' => 'index']); ?>" class="flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium <?php echo ($ctrl == 'commissions') ? $active : $inactive; ?>">
                <span class="material-symbols-outlined">payments</span> Comissões
            </a>
            <a href="<?php echo $this->Html->url(['controller' => 'settings', 'action' => 'index']); ?>" class="flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium <?php echo ($ctrl == 'settings') ? $active : $inactive; ?>">
                <span class="material-symbols-outlined">settings</span> Configurações
            </a>
        </div>
        <div class="mt-auto">
            <a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'logout']); ?>" class="flex items-center gap-3 px-3 py-3 rounded-lg text-[#92a4c9] hover:text-red-400">
                <span class="material-symbols-outlined">logout</span> Sair
            </a>
        </div>
    </div>
</div>