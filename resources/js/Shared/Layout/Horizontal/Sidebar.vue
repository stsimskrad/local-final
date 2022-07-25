<template>
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-start">
                <div class="flex mt-4 me-3">
                    <div class="avatar-md profile-user-wid">
                        <img :src="currentUrl+'/images/avatars/'+$page.props.scholar.data.profile.avatar" alt
                            class="img-thumbnail rounded-circle" />
                    </div>
                </div>

                <div class="flex-grow-1">
                    <div class="text-muted">
                        <span class="fw-bold font-size-13 text-primary">{{ $page.props.scholar.data.profile.firstname+' '+$page.props.scholar.data.profile.middlename+' '+$page.props.scholar.data.profile.lastname }}</span>
                        <p class="mb-0 font-size-11 fw-bold">{{ $page.props.scholar.data.spas_id }}</p>
                        <p class="mb-0 font-size-11 mt-n1">{{ $page.props.scholar.data.profile.email }}</p>
                        <p class="text-muted mb-0"><span :class="'badge bg-'+$page.props.scholar.data.status.color">{{$page.props.scholar.data.status.name}} </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div v-for="item in menuItems" v-bind:key="item.id" class="card border shadow-none"  style="margin-bottom: 4px;">
        <Link :href="item.link" class="text-body">
            <div class="p-1">
                <div class="d-flex mt-1">
                    <div class="avatar-xs align-self-center ms-2 me-2">
                        <div class="avatar-title rounded bg-transparent">
                            <i :class="`${item.color} bx ${item.icon} h4 mt-1`"></i>
                        </div>
                    </div> 
                    <div class="overflow-hidden me-auto align-self-center">
                        <h5 class="font-size-12 text-truncate mt-1" :class="{'text-primary': $page.component.startsWith(item.name) }">{{ item.label }}</h5> 
                    </div>
                </div>
            </div>
        </Link>
    </div>

</template>
<script>
import { menuItems} from "../Horizontal/menu";
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            menuItems: menuItems,
        }
    }
}
</script>