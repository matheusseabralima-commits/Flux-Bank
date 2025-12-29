<?php
// Lógica PHP mantida
$usuarioLogado = $this->Session->read('Auth.User');
$isAdmin = isset($usuarioLogado['role']) && $usuarioLogado['role'] === 'admin';
?>

<div class="p-6 max-w-[1400px] mx-auto flex flex-col gap-8">
    
    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 border-b border-[#232f48] pb-6">
        <div class="flex flex-col gap-2">
            <h1 class="text-white text-3xl font-black tracking-[-0.033em]">Gerenciar Usuários</h1>
            <p class="text-[#92a4c9] text-sm font-normal">Controle de acesso e permissões do sistema.</p>
        </div>
        
        <?php if($isAdmin): ?>
        <a href="<?php echo $this->Html->url(['action' => 'add']); ?>" class="px-4 py-2 rounded-lg bg-[#135bec] text-white text-sm font-bold hover:bg-blue-600 transition-colors shadow-lg shadow-blue-900/20 flex items-center gap-2">
            <span class="material-symbols-outlined text-[18px]">add</span> Novo Usuário
        </a>
        <?php endif; ?>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <?php foreach ($users as $user): ?>
            <?php 
                $isActive = !empty($user['User']['active']);
                $cardOpacity = $isActive ? '' : 'opacity-75';
                $statusColor = $isActive ? 'text-green-500 bg-green-500/10' : 'text-red-500 bg-red-500/10';
                $statusDot = $isActive ? 'bg-green-500' : 'bg-red-500';
                $statusText = $isActive ? 'Ativo' : 'Inativo';
                
                // Inicial do nome para o avatar
                $inicial = strtoupper(substr($user['User']['username'], 0, 1));
            ?>
            
            <div class="flex flex-col gap-4 rounded-xl p-5 border border-[#232f48] bg-[#1a2332] relative group hover:border-[#135bec]/50 transition-colors <?php echo $cardOpacity; ?>">
                
                <div class="flex justify-between items-start">
                    <div class="flex items-center gap-4">
                        <div class="size-12 rounded-full bg-[#232f48] border border-[#232f48] flex items-center justify-center text-white font-bold text-lg">
                            <?php echo $inicial; ?>
                        </div>
                        
                        <div>
                            <h3 class="text-white font-bold text-lg leading-tight">
                                <?php echo h($user['User']['username']); ?>
                            </h3>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="text-xs font-medium px-2 py-0.5 rounded bg-[#232f48] text-[#92a4c9] uppercase tracking-wide">
                                    <?php echo h($user['User']['role']); ?>
                                </span>
                                <span class="text-[#92a4c9] text-xs">ID: <?php echo h($user['User']['id']); ?></span>
                            </div>
                        </div>
                    </div>

                    <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium <?php echo $statusColor; ?>">
                        <span class="size-1.5 rounded-full <?php echo $statusDot; ?>"></span>
                        <?php echo $statusText; ?>
                    </span>
                </div>

                <?php if ($isAdmin): ?>
                    <div class="pt-4 mt-auto border-t border-[#232f48] flex justify-end gap-2">
                        <?php 
                            $isSelf = ($user['User']['id'] == $usuarioLogado['id']);
                            $isTargetAdmin = ($user['User']['role'] === 'admin');

                            if (!$isSelf && !$isTargetAdmin): 
                        ?>
                            <a href="<?php echo $this->Html->url(['action' => 'edit', $user['User']['id']]); ?>" 
                               class="px-3 py-1.5 rounded bg-[#232f48] text-white hover:bg-[#324467] text-sm font-medium transition-colors flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]">edit</span> Editar
                            </a>

                            <?php if ($isActive): ?>
                                <?php echo $this->Form->postLink(
                                    '<span class="material-symbols-outlined text-[16px]">block</span> Desativar',
                                    array('action' => 'delete', $user['User']['id']),
                                    array(
                                        'escape' => false,
                                        'class' => 'px-3 py-1.5 rounded bg-red-500/10 text-red-500 hover:bg-red-500/20 text-sm font-medium transition-colors flex items-center gap-1',
                                        'confirm' => 'Desativar acesso de ' . $user['User']['username'] . '?'
                                    )
                                ); ?>
                            <?php else: ?>
                                <?php echo $this->Form->postLink(
                                    '<span class="material-symbols-outlined text-[16px]">check_circle</span> Reativar',
                                    array('action' => 'activate', $user['User']['id']),
                                    array(
                                        'escape' => false,
                                        'class' => 'px-3 py-1.5 rounded bg-green-500/10 text-green-500 hover:bg-green-500/20 text-sm font-medium transition-colors flex items-center gap-1',
                                        'confirm' => 'Reativar acesso de ' . $user['User']['username'] . '?'
                                    )
                                ); ?>
                            <?php endif; ?>

                        <?php else: ?>
                            <span class="text-[#92a4c9] text-xs italic py-2 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">lock</span> Protegido
                            </span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="flex justify-center mt-6">
        <div class="flex bg-[#1a2332] rounded-lg border border-[#232f48] overflow-hidden">
            <?php
                echo $this->Paginator->prev('Previous', array('class' => 'px-4 py-2 text-sm text-[#92a4c9] hover:bg-[#232f48] border-r border-[#232f48] transition-colors'), null, array('class' => 'hidden'));
                echo $this->Paginator->numbers(array(
                    'separator' => '',
                    'class' => 'px-4 py-2 text-sm text-[#92a4c9] hover:bg-[#232f48] border-r border-[#232f48] transition-colors cursor-pointer',
                    'currentClass' => 'bg-[#135bec] text-white font-bold hover:bg-[#135bec]',
                    'tag' => 'span'
                ));
                echo $this->Paginator->next('Next', array('class' => 'px-4 py-2 text-sm text-[#92a4c9] hover:bg-[#232f48] transition-colors'), null, array('class' => 'hidden'));
            ?>
        </div>
    </div>
</div>