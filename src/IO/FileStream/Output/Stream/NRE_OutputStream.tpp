
    /**
     * @file NRE_OutputStream.hpp
     * @brief Implementation of Engine's IO's Object : OutputStream
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline std::streampos OutputStream::getPosition() {
                return getStream().tellp();
            }

            inline void OutputStream::seekBegin(size_t offset) {
                getStream().seekp(offset, getStream().beg);
            }

            inline void OutputStream::seekEnd(size_t offset) {
                getStream().seekp(offset, getStream().end);
            }
        }
    }
