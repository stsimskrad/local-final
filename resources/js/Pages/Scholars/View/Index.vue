<template>
<Header :title="user.data.profile.firstname+' '+user.data.profile.lastname" :content="'Scholar Profile'" :items="items" />
<div class="d-lg-flex mt-n3">
    <div class="chat-leftsidebar me-lg-4">

        <div class="py-4 border-bottom" style="margin-top: -20px;">
            <div class="media">
                <div class="align-self-center me-3">
                    <img class="rounded avatar-md" :src="currentUrl+'/images/avatars/'+user.data.profile.avatar" alt="">
                </div>
                <div class="media-body">
                    <h5 class="font-size-15 mt-0 mb-1 mt-1">
                        {{user.data.profile.firstname}} {{user.data.profile.lastname}}
                    </h5>
                    <p class="text-muted font-size-11 fw-bold mb-0">{{user.data.spas_id}}</p>
                    <p class="text-muted mb-0"><span :class="'badge bg-'+user.data.status.color">{{user.data.status.name}} </span></p>
                </div>
                <b-dropdown menu-class="dropdown-menu-end" class="chat-noti-dropdown active" right variant="white">
                    <template v-slot:button-content>
                        <i class="bx bx-bell bx-tada"></i>
                    </template>
                    <b-dropdown-item @click="updateStatus(user.data.id,user.data.status.id)">Update Status</b-dropdown-item>
                    <b-dropdown-item>Update Level</b-dropdown-item>
                </b-dropdown>
            </div>
        </div>

        <div class="search-box chat-search-box py-4">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="bx bx-search-alt search-icon"></i>
            </div>
        </div>
        <div class="card border shadow-none"  style="margin-bottom: 4px;">
             <Link :href="'/scholars/'+user.data.code" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-warning bx bx-home h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="{ 'text-primary': $page.url === '/scholars/'+user.data.code }">Home</h5> 
                        </div>
                    </div>
                </div>
            </Link>
        </div>

        <div class="card border shadow-none"  style="margin-bottom:4px;">
            <Link :href="'/scholars/'+user.data.code+'/profile'" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-primary bx bx-user-circle h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="{ 'text-primary': $page.url === '/scholars/'+user.data.code+'/profile' }">Profile Information</h5> 
                        </div>
                    </div>
                </div>
            </Link>
        </div>

        <div class="card border shadow-none"  style="margin-bottom: 4px;">
            <Link :href="'/scholars/'+user.data.code+'/benefit'" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-danger bx bx-money h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="{ 'text-primary': $page.url === '/scholars/'+user.data.code+'/benefit' }">Financial Benefits</h5> 
                        </div>
                    </div>
                </div>
            </Link>
        </div>

        <div class="card border shadow-none"  style="margin-bottom: 4px;">
            <Link :href="'/scholars/'+user.data.code+'/enrollment'" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-success bx bxs-school h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="{ 'text-primary': $page.url === '/scholars/'+user.data.code+'/enrollment' }">Enrollment Information</h5> 
                        </div>
                    </div>
                </div>
            </Link>
        </div>
        
        <div class="card border shadow-none"  style="margin-bottom: 4px;">
            <Link :href="'/scholars/'+user.data.code+'/employment'" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-info bx bx-user-pin h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="{ 'text-primary': $page.url === '/scholars/'+user.data.code+'/employment' }">Employment History</h5> 
                        </div>
                    </div>
                </div>
            </Link>
        </div>

        <div class="card border shadow-none"  style="margin-bottom: 4px;">
            <Link :href="'/scholars/'+user.data.code+'/prospectus'" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-secondary bx bx-notepad h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="{ 'text-primary': $page.url === '/scholars/'+user.data.code+'/prospectus' }">Prospectus</h5> 
                        </div>
                    </div>
                </div>
            </Link>
        </div>
    </div>

    <div class="w-100 user-chat">
        <div class="card" :style="{ height: height + 'px' }">
            <div class="p-4">
                <div class="row">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</div>

</template>
<script>
import Header from "@/Shared/Header.vue";
export default {
    props: { user : Object},
    components : { Header },
    inject:['count2', 'height'],
    data() {
        return {
            currentUrl: window.location.origin,
            items: [
                {text: "Scholar", href: "/",},
                {text: "Profile",active: true,},
            ],
        };
    },
}
</script>
