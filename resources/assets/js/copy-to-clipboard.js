import ClipboardJS from 'clipboard'
import nativeToast from 'native-toast'

const clipboard = new ClipboardJS('.share__button--copy')

clipboard.on('success', e => {
    nativeToast({
        message: 'Berhasil dicopy!',
        position: 'south-west',
    })
})
