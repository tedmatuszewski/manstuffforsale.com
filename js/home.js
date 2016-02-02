; (function() {
    var images, imagesToUpload = 0, imagesUploaded = 0

    $(function () {
        ajaxSetup()
        dropzoneSetup()

        $(document).on("click", ".right-carousel", rightCarouselClick)
        $(document).on("click", ".left-carousel", leftCarouselClick)
        $(document).on("click", ".btnAddPost", btnAddPostClick)
        $(document).on("click", ".showAddContainer", showAddContainerClick)
        $(document).on("click", ".hideAddContainer", hideAddContainerClick)
        $(document).on("click", ".faDeleteItem", faDeleteItemClick)
        $("img").on("load", function() { 
            var container = $(this).closest("[data-imagesloaded]"),
                imagesLoaded = parseInt(container.attr("data-imagesloaded")),
                totalImages = container.find("img").length
            
            container.attr("data-imagesloaded", ++imagesLoaded)
            
            if(imagesLoaded == totalImages) {
                container.removeClass("images-loading")   
            }
        })
    })
    
    function hideAddContainerClick() {
        $(".add-container").animateCSS('bounceOutUp', function() {
            $(".add-container").hide()
        });

        return false
    }
    function showAddContainerClick() {
        if($(".add-container").is(":visible")) {
            $(".add-container").animateCSS('bounceOutUp', function() {
                $(".add-container").hide()
            });
        }
        else {
            $(".add-container").animateCSS('bounceInDown');
        }

        return false
    }
    function btnAddPostClick() {
        $(".uploading").show()
        
        imagesToUpload = images.getQueuedFiles().length
        
        images.processQueue()
    }
    function leftCarouselClick() {
        var $this = $(this)
        var container = $this.parent()

        container.find("img:last").prependTo(container)

        return false
    }
    function rightCarouselClick() {
        var $this = $(this)
        var container = $this.parent()

        container.find("img:last").after(container.find("img:first"))

        return false
    }
    function faDeleteItemClick() {
        var self    = $(this).closest("[data-id]"), 
            id      = self.attr("data-id"),
            posting = $.post("/delete/", { id: id })
        
        posting.done(function(response) {
            self.slideUp(function() {
                $(this).remove()
            })
        })
    }
    
    function dropzoneSetup() {
        images = new Dropzone("#images", { 
            url: "/add/", 
            uploadMultiple: true,
            autoProcessQueue: false,
            paramName: "images",
            addRemoveLinks: true,
            acceptedFiles: "image/*",
            parallelUploads: 10
        });

        images.on("sending", function(file, xhr, fd) {
            fd.append("name", $('[name="name"]').val())
            fd.append("state", $('[name="state"]').val())
            fd.append("location", $('[name="location"]').val())
            fd.append("description", $('textarea[name="description"]').val())
        })

        images.on("success", function(file, response) {
            if(++imagesUploaded == imagesToUpload) {
                var resp = JSON.parse(response)
                var firstItem = $(".column2").find("[data-id]").first().remove()

                $(".column1").prepend(firstItem)
                $(".column2").prepend(resp.html)

                imagesToUpload = 0, imagesUploaded = 0
                
                console.log(file, resp)
            }
            else {
                
            }
        })

        images.on("totaluploadprogress", function(a, b, c, d) {
            $(".progress-bar").text(parseInt(a) + "%")
            $(".progress-bar").css("width", a + "%")
        })

        images.on("queuecomplete", function(file) {
            $('[name="name"]').val("")
            $('[name="state"]').find("option:first").attr("selected", "selected")
            $('[name="location"]').val("")
            $('textarea[name="description"]').val("")
            $(".uploading").hide()

            images.removeAllFiles()
        })
    }
    function ajaxSetup() {
        $.ajaxSetup({
            dataType : "json"
        });
    }
    
})();