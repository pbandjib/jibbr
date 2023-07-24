<div>
    <nav>
        <ul>
            <li>
                <p wire:click="$emit('updateComponent', 'community-admin-dashboard')">Dashboard</p>
            </li>
            <li>
                <p wire:click="$emit('updateComponent', 'community-admin-users')">Users</p>
            </li>
            <li>
                <p wire:click="$emit('updateComponent', 'community-admin-reports')">Reports</p>
            </li>
            <li>
                <p wire:click="$emit('updateComponent', 'community-admin-settings')">Settings</p>
            </li>
        </ul>
    </nav>
</div>
